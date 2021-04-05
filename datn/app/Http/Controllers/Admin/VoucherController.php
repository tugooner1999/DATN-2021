<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models;
use App\Models\Voucher;
use App\Models\Voucher_type;
class VoucherController extends Controller
{
    //
    public function index(){
        $voucher = Voucher::all();
        $voucher_type = Voucher_type::all();
        return view('admin.voucher.index',compact('voucher','voucher_type'));

    }

    public function create_voucher(Request $request){
        $voucher_type = Voucher_type::all();
        
        return view('admin.voucher.add-voucher',compact('voucher_type'));
    }
    public function saveAdd(Request $request)
    {
        $model = new Voucher();
        $model->name = $request->name;
        $model->code = $request->code;
        $model->start_date = $request->start_date;
        $model->finish_date = $request->finish_date;
        $model->type_id = $request->type_id;
        $model->created_by = $request->created_by;
        
        $model->created_at = $request->created_at;
        $model->status = $request->status;
        $model->save();

        return redirect(route('user.index'));
    }
   
    
    public function edit_voucher(){
        return view('admin.voucher.edit-voucher');
    }
   
}
