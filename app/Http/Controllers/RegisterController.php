<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\Role;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use App\Models\UserDetail;
use App\MyApp;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all();
        $countries = Country::all();
    
        return view('register', [
            "roles"=>$roles,
            "countries"=>$countries,
        ]);   
    }

    public function register( Request $req)
    {
        $validator = Validator::make($req->all(),[
            'mobile' => 'required|max:191',
            'email' => 'required|unique:users,email,'.$req->input('email'),
            'name' => 'required|max:191',
            'role_id' => 'required|max:191',
            'pan' => 'required|max:191',
            'country_id' => 'required|max:191',
            'state_id' => 'required|max:191',
            'city_id' => 'required|max:191',
            'pincode' => 'required|max:191',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{

            $model = new User ;
            $model->mobile = $req->input('mobile');
            $model->email = strtolower($req->input('email'));
            $model->password = Hash::make($req->input('password')); 

            if($model->save()){
                $userDetail = new UserDetail ;

                $userDetail->user_id = $model->id;
                $userDetail->role_id = $req->input('role_id');
                $userDetail->name = strtolower($req->input('name'));
                $userDetail->pan = $req->input('pan');
                $userDetail->country_id = $req->input('country_id');
                $userDetail->state_id = $req->input('state_id');
                $userDetail->city_id = $req->input('city_id');
                $userDetail->pincode = $req->input('pincode');
                $userDetail->save();
            }

            return response()->json([
                'status'=>200,
            ]);
        }
    }

    public function getStateByCountry($country_id)
    {
        $data = State::where(['country_id'=>$country_id])->get(['id', 'state',]);

        $html = "";
        $html .= "<option selected disabled >State</option>";
        foreach($data as $list)
        {
            $html.= "<option value='" . $list->id . "'>" . ucwords($list->state) . "</option>";
        }
        return response()->json([
            'status'=> 200,
            'html'=> $html,
        ]);
    }

    public function getCityByState($state_id)
    {
        $data = City::where(['state_id'=>$state_id])->get(['id', 'city',]);

        $html = "";
        $html .= "<option selected disabled >City</option>";
        foreach($data as $list)
        {
            $html.= "<option value='" . $list->id . "'>" . ucwords($list->city) . "</option>";
        }
        return response()->json([
            'status'=> 200,
            'html'=> $html,
        ]);
    }




    //public function index()
    //{
        // $country = Http::get('206.189.136.20:1700/api/country');
        // $url = config('app.api_url').'country/';
        // $countries = Http::get($url);  
    //}

    // public function register( Request $req)
    // {
    //     $mobile = $req->input('mobile');
    //     $i_agree = $req->input('i_agree');

    //     $url = config('app.api_url').'register';
    //     $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($url, [
    //         'mobile' => $mobile,
    //         'i_agree' => $i_agree,
    //     ]);
        
    //     return $response;
    // }
}
