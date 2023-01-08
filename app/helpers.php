<?php
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\DesignType;
use App\Models\SetPrice;
use App\Models\CouponPrice;

function getData()
{   
    return "ok";
}

function sendMail($to_email,$password){
    Mail::send([], [], function($msg) use($to_email, $password){
       $msg->to($to_email);
       $msg->subject('Login Access');
       $msg->setBody('This mail sent from '. config('app.name') . '. Your password is ' . $password );
       
    //    $partner_id = config('app.partner_id');
    //    $partner_id = config('app.name');
    //    foreach($upload_files as $file){
    //       $msg->attach('public/storage/'. $file->file_path, array(
    //          'as' => $file->file_name,
    //          'mime' => 'application/pdf/png/jpeg/jpg')
    //       );
    //    }
 
    });
 
    return $mail_status = [
       'status'=>200
    ];
 }

function getPartnerPrice($role_id)
{
    $user_id = session('LOGIN_ID');
    $price = SetPrice::where(['user_id'=>$user_id, 'role_id'=>$role_id])->first('partner_price');
    if ($price != null) {
        return $price['partner_price'];
    }else{
        return $price = 0;
    }
}

function getCouponPrice($role_id, $coupon_type)
{
    $partner_id = session('LOGIN_ID');
    $data = CouponPrice::where(['partner_id'=>$partner_id, 'role_id'=>$role_id, 'coupon_type'=>$coupon_type])->first(['coupon_price']);

    if ($data != null) {
        return $data['coupon_price'];
    }else{
        return $price = 0;
    }
}
