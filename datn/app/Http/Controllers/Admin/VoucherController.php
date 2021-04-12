<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VoucherRequest;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VoucherController extends Controller
{
    //
    public function index(){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $voucher = Voucher::all();
        $voucher = Voucher::paginate(5);
        return view('admin.voucher.index',compact('voucher','today'));

    }

    public function create_voucher(Request $request){
        return view('admin.voucher.add-voucher');
    }
    public function saveAdd(Request $request){
        if($request->isMethod('POST')){
            $rule = [
                'name' => 'required',
                'code' => 'required|unique:vouchers|min:5|max:11',
                'finish_date' => 'required',
                'amount' => 'required|min:1',
                'value' => 'required',
                ];
            $msgE = [
                'name.required' => 'name không được để trống',
                'code.required' => 'Mã code không được để trống',
                'code.unique' => 'Mã code đã tồn tại',
                'code.min'=>'Mã code có ít nhất 5 kí tự và nhiều nhất 11 kí tự',
                'code.max'=>'Mã code có ít nhất 5 kí tự và nhiều nhất 11 kí tự',
                'finish_date.required' => 'Ngày kết thúc trống',
                'value.required' => 'giá trị trống',
                'amount.required' => 'số lượng trống',
                'amount.min'=>'số lượng có ít nhất 1 kí tự',
                ];
            $validator = Validator::make($request->all(), $rule, $msgE);
            if ($validator->fails()) {
                $request->flash();
                return redirect()->route('admin.addVoucher')->withErrors($validator);
            }
            else{
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
        }
        return view('admin.voucher.add-voucher');
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
