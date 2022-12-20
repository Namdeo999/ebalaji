<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\MyApp;
use GuzzleHttp\Client;
use Validator;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
    //
    public function index(Request $req)
    {
        if($req->session()->has('LOGIN'))
        {
            return redirect('dashboard');
        }else {
            return view('/login');
        }
        return view('/login');
    }

    public function userLogin(Request $req){
        $mobile = $req->input('mobile');
        $password = $req->input('password');

        $result = User::where(['mobile'=>$mobile])->first();
        if($result)
        {
            if(Hash::check($req->input('password'),$result->password))
            {
                $user_detail = UserDetail::where(['user_id'=>$result->id])->first();

                $req->session()->put('LOGIN', true);
                $req->session()->put('LOGIN_ID', $result->id);
                $req->session()->put('LOGIN_NAME', $user_detail->name);
                $req->session()->put('LOGIN_ROLE', $user_detail->role_id);
                return redirect('dashboard');

            }else{
                $req->session()->flash('error','Please enter valid password');
                return redirect('/login');
            }
        }else{
            $req->session()->flash('error','Please enter valid login details');
            return redirect('/login');
        }
    }

    public function logout(Request $req)
    { 
        // if(session('LOGIN_ROLE') == MyApp::ADMINISTRATOR){
        //     session()->forget('ADMIN_LOGIN');
        // }elseif (session('LOGIN_ROLE') == MyApp::BILLING) {
        //     session()->forget('BILLING_LOGIN');
        // }
        session()->forget('LOGIN');
        session()->forget('LOGIN_ID');
        session()->forget('LOGIN_NAME');
        session()->forget('LOGIN_ROLE');
        session()->flash('msg','Logout successfully'); 
        return redirect('/login');
    }

    // public function userLogin(Request $req)
    // {

    //     $mobile = $req->input('mobile');
    //     $password = $req->input('password');

    //     if($mobile != "" && $password !="") {
    //         $url = config('app.api_url').'user-login';
    //         $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($url, [
    //             'mobile' => $mobile,
    //             'password' => $password,
    //         ]);

    //         if($response['status'] == 200){
    //             return redirect('/dashboard');
    //         }
    //     }       
    //     return redirect('/login');
    // }
}
