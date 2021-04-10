<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VoucherRequest;
use App\Models\Voucher;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VoucherController extends Controller
{
    //
    public function index(){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $voucher = Voucher::all();
        return view('admin.voucher.index',compact('voucher','today'));

    }

    public function create_voucher(Request $request){
        return view('admin.voucher.add-voucher');
    }
    public function saveAdd(VoucherRequest $request)
    {
        $dt_create = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $data =$_POST;
        $model = new Voucher();
        $model->fill($data);
        $model->start_date = $dt_create;
        $model->created_by = Auth::user()->id;
        $model->save();
        Session::put('message','Thêm khuyến mại thành công');
        return redirect(route('admin.listVoucher'));
    }

    public function edit_voucher($id ,Request $request){
        $show = Voucher::find($id);
            return view('admin.voucher.edit-voucher', compact('show'));
        }
    public function update_voucher($id,VoucherRequest $request){
        $dt_create = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $data= $_POST;
        $model = Voucher::find($id);
        $model->fill($data);
        $model->start_date = $dt_create;
        $model->created_by = Auth::user()->id;
        $model->save();
        Session::put('message','Cập nhật thành công');
        return redirect(route('admin.listVoucher'));
    }

    public function destroy($id)
    {
        $User = Voucher::find($id);
        $User->delete();
        return back();
        
    }
}
