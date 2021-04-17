<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Controller;
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
            'value'=>$value,
            'type'=>$type,
            'code'=>$code
        ];
        Mail::send('admin.sendmail.senMailVoucher',compact('voucher'), function($message) use ($title_mail,$data){
            $message->to($data['email'])->subject($title_mail);
            $message->from($data['email'],$title_mail);
        });
        return redirect()->back()->with('message','Gửi mãi khuyến mại thành công');
    }

}