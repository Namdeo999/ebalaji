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

class PartnerController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all();
        $countries = Country::all();
        $partners = UserDetail::join('roles','user_details.role_id','=','roles.id')
            ->join('states','user_details.state_id','=','states.id')
            ->where('partner_id', session('LOGIN_ID'))
            ->get(['user_details.*','roles.role','states.state']);

        return view('content.partners', [
            'roles'=>$roles,
            'countries'=>$countries,
            'partners'=>$partners
        ]);   
    }

    public function savePartner(Request $req)
    {
        
        $validator = Validator::make($req->all(),[
            'mobile' => 'required|unique:users,mobile,'.$req->input('mobile'),
            'email' => 'required|unique:users,email,'.$req->input('email'),
            'name' => 'required|max:191',
            'role_id' => 'required|max:191',
            'pan' => 'required|max:191',
            'country_id' => 'required|max:191',
            'state_id' => 'required|max:191',
            'city_id' => 'required|max:191',
            'pincode' => 'required|max:191',
            'partner_id' => 'required|max:191',
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
            
            // $model->password = Hash::make($req->input('password')); 
            $model->password = Hash::make('User@123'); 

            if($model->save()){
                $userDetail = new UserDetail ;
                $unique_id = 'EPAY0'.$model->id;

                $userDetail->user_id = $model->id;
                $userDetail->unique_id = $unique_id;
                $userDetail->partner_id = $req->input('partner_id');
                $userDetail->role_id = $req->input('role_id');
                $userDetail->name = strtolower($req->input('name'));
                $userDetail->pan = $req->input('pan');
                $userDetail->country_id = $req->input('country_id');
                $userDetail->state_id = $req->input('state_id');
                $userDetail->city_id = $req->input('city_id');
                $userDetail->pincode = $req->input('pincode');
                $userDetail->join_amount = $req->input('join_amount');
                $userDetail->domain = $req->input('domain');

                if ($req->input('role_id') == MyApp::ADMIN) {
                    $AadharFrontImage = public_path('storage/').$userDetail->aadhar_front;
                    if(file_exists($AadharFrontImage)){
                        @unlink($AadharFrontImage); 
                    }
                    $userDetail->aadhar_front = $req->file('aadhar_front')->store('assets/partners'. $req->input('aadhar_front'),'public');
                    
                    $AadharBackImage = public_path('storage/').$userDetail->aadhar_back;
                    if(file_exists($AadharBackImage)){
                        @unlink($AadharBackImage); 
                    }
                    $userDetail->aadhar_back = $req->file('aadhar_back')->store('assets/partners'. $req->input('aadhar_back'),'public');
    
                    $PanFrontImage = public_path('storage/').$userDetail->pan_front;
                    if(file_exists($PanFrontImage)){
                        @unlink($PanFrontImage); 
                    }
                    $userDetail->pan_front = $req->file('pan_front')->store('assets/partners'. $req->input('pan_front'),'public');
    
                    $PanBackImage = public_path('storage/').$userDetail->pan_back;
                    if(file_exists($PanBackImage)){
                        @unlink($PanBackImage); 
                    }
                    $userDetail->pan_back = $req->file('pan_back')->store('assets/partners'. $req->input('pan_back'),'public');
                }

                $userDetail->save();
                // if ($userDetail->save()) {
                //     $data = $this->getUserDetail($model->id);
                // }
            }

            return response()->json([
                'status'=>200,
                // 'html'=>$data['html'],
            ]);
        }
    }

}
