<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    //
    public function index()
    {
        // $country = Http::get('206.189.136.20:1700/api/country');


        $url = config('app.api_url').'country/';
        $countries = Http::get($url);

        return view('register', [
            'countries'=>$countries['data']
        ]);   
    }

    public function register( Request $req)
    {
        $mobile = $req->input('mobile');
        $i_agree = $req->input('i_agree');

        $url = config('app.api_url').'register';
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($url, [
            'mobile' => $mobile,
            'i_agree' => $i_agree,
        ]);
        
        return $response;
    }
}
