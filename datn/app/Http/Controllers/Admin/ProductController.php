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
        $category = Category::all();
        $pro = Product::paginate(5);
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
        $data = $_POST;
        $product = new Product();
        $product->fill($data);
        $product->create_at= $dt_create;
        $product->allow_market=isset($_POST['allow_market']) ? $_POST['allow_market'] : 2;  
        if($request->hasFile('image_gallery')){
            $request->validate([
                'image_gallery' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image_gallery->extension();  
            $product->image_gallery =$request->image_gallery->move(public_path('frontend\images'), $imageName);

        }
        $product->views = 1;
        $product->save();
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('/admin/products');
    }

    public function updateProduct(Request $request,$id){
        $dt_update = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $product = Product::find($id);
        $data= $_POST;
        $product->fill($data);
        if($request->hasFile('image_gallery')){
            $path = $request->file('image_gallery')->store('public/frontend/images');
            $product->image_gallery = str_replace("public/", "storage/", $path);
        }
        $product->update_at= $dt_update;
        $product->allow_market=isset($_POST['allow_market'])
        ? $_POST['allow_market'] : 2; //lấy thời gian thực theo ngày tháng năm
        $product->save();
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('/admin/products');  
    }
}
