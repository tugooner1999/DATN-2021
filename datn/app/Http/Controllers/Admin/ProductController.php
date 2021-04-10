<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
// use Illuminate\Database\Eloquent\Collection::intersect()
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Collection::intersect()
use Illuminate\Support\Facades\Session;
session_start();

class ProductController extends Controller
{

    public function index(Request $request){
        $pro = Product::all();
        $category = Category::all();
        return view('admin.product.index',compact('pro','category'));
    }

    public function create_product(){
        $cates = Category::all();
        return view('admin.product.add-product', compact('cates'));
    }

    public function edit_product($id){
        // $objU = Product::where('id',$id)->first();
        $cate_product = Category::all();
        $edit_product = DB::table('products')->where('id', $id)->get();
        return view('admin.product.edit-product', compact('cate_product','edit_product'));
    }

    public function deleteProduct($id){
        Product::destroy($id);
        Session::put('message','Xoá sản phẩm thành công');
        return  redirect()->back();; 
    }

    public function addProduct(Request $request){
        $dt_create = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $data = new Product();
            $data['name'] = $request->product_name;
            $data['description'] = $request->product_description;
            $data['price'] = $request->product_price;
            $data['quantily'] = $request->product_quantily;
            $data['category_id'] = $request->product_cate;
            $data['create_at'] = $dt_create;
            $data['allow_market']=isset($_POST['allow_market']) ? $_POST['allow_market'] : 2;  
            
            
            $file = $request->file('image_gallery');
            $file_allow_upload = config('app.file_allow_upload');
            // đưa thông tin ra view:
            $file_info = new \stdClass();
            $file_info->name = $file->getClientOriginalName();
            $file_info->extension = $file->getClientOriginalExtension();
            $file_info->path = $file->getRealPath();
            $file_info->size = $file->getSize();
            $file_info->mime = $file->getMimeType();

            //di chuyển file từ thư mục tạm vào thư mục lưu trữ trong /public để xem ảnh dạng web
            $destinationPath = 'uploads/products';
            $file->move($destinationPath,$file->getClientOriginalName());

            // dùng cái link dưới đây để lưu vào CSDL nhé.
            $file_info->link_img = 'uploads/products/'.$file->getClientOriginalName();
            $data['image_gallery']=$file_info->link_img;
            $data->save();
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('/admin/products');
    }

    public function updateProduct(Request $request,$id){
        $dt_update = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $data = array();
        $data['name'] = $request->product_name;
        $data['description'] = $request->product_description;
        $data['price'] = $request->product_price;
        $data['quantily'] = $request->product_quantily;
        $data['category_id'] = $request->product_cate;
        $data['update_at'] = $dt_update;
        $data['allow_market']=isset($_POST['allow_market'])
        ? $_POST['allow_market'] : 2; //lấy thời gian thực theo ngày tháng năm

        
        $file = $request->file('image_gallery');
        $file_allow_upload = config('app.file_allow_upload');
        // đưa thông tin ra view:
        $file_info = new \stdClass();
        $file_info->name = $file->getClientOriginalName();
        $file_info->extension = $file->getClientOriginalExtension();
        $file_info->path = $file->getRealPath();
        $file_info->size = $file->getSize();
        $file_info->mime = $file->getMimeType();

        //di chuyển file từ thư mục tạm vào thư mục lưu trữ trong /public để xem ảnh dạng web
        $destinationPath = 'uploads/products';
        $file->move($destinationPath,$file->getClientOriginalName());

        // dùng cái link dưới đây để lưu vào CSDL nhé.
        $file_info->link_img = 'uploads/products/'.$file->getClientOriginalName();
        $data['image_gallery']=$file_info->link_img;
        DB::table('products')->where('id', $id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('/admin/products');  
    }
}
