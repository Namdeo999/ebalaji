<?php
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\DesignType;

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
