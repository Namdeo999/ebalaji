<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\MyApp;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    //
    //
    public function index()
    {
        // $project_img = Http::get(MyApp::API_URL.'get-project-image');
        // echo "<pre>";
        // print_r($project_img['project_prestigious_img']);
        // dd();
        // return view('content.dashboard.dashboards-analytics');   
        return view('dashboard');   
    }
    public function index2()
    {
        // $country = Http::get('206.189.136.20:1700/api/country');


        $url = config('app.api_url').'country/';
        $countries = Http ::get($url);

        // return view('projects.apiwithkey', compact('responseBody'));
        // return view('content.dashboard.dashboards-analytics');   
        return view('register', [
            'countries'=>$countries['data']
        ]);   
    }

    // public function createUser(Request $request){
    //     $theUrl     = config('app.guzzle_test_url').'/api/users/create';
    //     $response= Http::post($theUrl, [
    //         'name'=>$request->name,
    //         'email'=>$request->email
    //     ]);
    //     return $response;
    // }
    // public function deleteUser($id){
    // $theUrl     = config('app.guzzle_test_url').'/api/users/delete/'.$id;
    //         $delete   = Http ::delete($theUrl);
    //     return $delete;
    // }
}
