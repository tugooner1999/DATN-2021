<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMailVoucher($id,Request $Request)
    {   
        $this->authorize('admin');
        $user = User::where('role_id','=',0)->get();
        $voucher = voucher::find($id);
        $start_date = $voucher->start_date;
        $finish_date = $voucher->finish_date;
        $amount = $voucher->amount;
        $value = $voucher->value;
        $status = $voucher->status;
        $type = $voucher->type;
        $code = $voucher->code;
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $title_mail = "Mã khuyến mãi ngày ".''.$now;
        $data = [];
        foreach($user as $vip){
            $data['email'][]=$vip->email;
        }
        
        $voucher = [
            'start_date'=> $start_date, 
            'finish_date'=> $finish_date,
            'amount'=>$amount,
            'status'=>$status,
            'value'=>$value,
            'type'=>$type,
            'code'=>$code
        ];
        if($voucher['status'] == 1){
            Mail::send('admin.sendmail.senMailVoucher',compact('voucher'), function($message) use ($title_mail,$data){
                $message->to($data['email'])->subject($title_mail);
                $message->from($data['email'],$title_mail);
            });
            Session::put('message','Gửi mãi khuyến mại thành công');
        }
        if($voucher['status'] == 2){
            Session::put('message','Gửi mãi khuyến mại thất bại');
        }
        return redirect()->back();
    }

}