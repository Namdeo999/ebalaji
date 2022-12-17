<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterController;

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
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [UserController::class, 'index']);
Route::post('/user-login', [UserController::class, 'userLogin']);

Route::controller(RegisterController::class)->group(function () {
    Route::get('register','index');
    Route::post('user-register','register');
    Route::get('get-state-by-country/{country_id}', 'getStateByCountry');
    Route::get('get-city-by-state/{state_id}', 'getCityByState');
    
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


});



// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/user-register', [RegisterController::class, 'index']);

