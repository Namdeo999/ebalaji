<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SetPriceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});
Route::get('/disclaimer', function () {
    return view('disclaimer');
});
Route::get('/refund-policy', function () {
    return view('refund_policy');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [UserController::class, 'index']);
Route::post('/user-login', [UserController::class, 'userLogin']);

Route::controller(RegisterController::class)->group(function () {
    // Route::get('register','index');
    Route::post('user-register','register');
    Route::get('state-by-country/{country_id}', 'getStateByCountry');
    Route::get('city-by-state/{state_id}', 'getCityByState');
    
});

// Route::post('/register', [RegisterController::class, 'register']);
// Route::post('register/register', [UserController::class, 'saveMobileNo']);

Route::group(['middleware'=>'user_auth'], function(){

    Route::fallback(function () {
        return view('404');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard','index');
        
    });

    Route::controller(MasterController::class)->group(function () {        
        Route::get('get-state-by-country/{country_id}', 'getStateByCountry');
        Route::get('get-city-by-state/{state_id}', 'getCityByState');
    });
    
    Route::controller(PartnerController::class)->group(function () {
        Route::get('partner','index');
        Route::post('save-partner','savePartner');
        
    });

    Route::controller(SetPriceController::class)->group(function () {
        Route::get('set-price','index');
        // Route::post('save-partner','savePartner');
        
    });


    Route::get('logout', [UserController::class, 'logout']);
});



// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/user-register', [RegisterController::class, 'index']);

// MAIL_MAILER=smtp
// MAIL_HOST=184.168.116.160
// MAIL_PORT=25
// MAIL_USERNAME=office@sdplweb.com
// MAIL_PASSWORD=!*Office@99!*
// MAIL_ENCRYPTION=
// MAIL_FROM_ADDRESS=office@sdplweb.com
// MAIL_FROM_NAME="SDPLweb"

//helper
// use Illuminate\Support\Facades\Mail;

// function sendMail($assigniforms_id,$created_by,$to_email,$project_name){
//     $upload_files = UploadFiles::where(['assign_iform_id'=>$assigniforms_id])->get();
 
//     if($created_by == MyApp::PRAJWAL_SIR){
//        $cc_mail = 'prajwalshrikhande@gmail.com';
//     }else{
//        $cc_mail = 'anuragshrikhande9@gmail.com';
//     }
    //--------------
    // $cc_mail = 'ssdoffice44@gmail.com';
    
    // foreach ($upload_files as $file) {
    //    $path = $file;
    //    $attachments[] = $path;
    // }
 
    //$attachments = collect([]);
    //---------------
 
    // Mail::send([], [], function($msg) use($to_email, $cc_mail, $project_name, $upload_files){
    //    $msg->to($to_email);
    //    $msg->cc($cc_mail);
    //    $msg->bcc('shriofficejabalpur@gmail.com');
    //    $msg->subject($project_name);
    //    $msg->setBody('This mail sent from SDPL. Please find required drawing from attachment.');
       
    //    foreach($upload_files as $file){
    //       $msg->attach('public/storage/'. $file->file_path, array(
    //          'as' => $file->file_name,
    //          'mime' => 'application/pdf/png/jpeg/jpg')
    //       );
          //---------------
          // $msg->attach('public/storage/'. $file->file_path, array(
          //    'as' => $file->file_name,
          //    'mime' => 'application/pdf/png/jpeg')
          // );
          //---------------
//        }
 
//     });
 
//     return $mail_status = [
//        'status'=>200
//     ];
//  }

//controller 
// $mail_status = sendMail($assigniforms_id, $iform_data['created_by'], $to_email, $project_name);

