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
            
            // $model->password = Hash::make($req->input('password')); 
            $model->password = Hash::make('User@123'); 

            if($model->save()){
                $userDetail = new UserDetail ;
                $unique_id = 'EPAY0'.$model->id;

                $userDetail->user_id = $model->id;
                $userDetail->unique_id = $unique_id;
                $userDetail->role_id = $req->input('role_id');
                $userDetail->name = strtolower($req->input('name'));
                $userDetail->pan = $req->input('pan');
                $userDetail->country_id = $req->input('country_id');
                $userDetail->state_id = $req->input('state_id');
                $userDetail->city_id = $req->input('city_id');
                $userDetail->pincode = $req->input('pincode');
                $userDetail->join_amount = $req->input('join_amount');
                $userDetail->save();
                if ($userDetail->save()) {
                    $data = $this->getUserDetail($model->id);
                }
            }

            return response()->json([
                'status'=>200,
                'html'=>$data['html'],
            ]);
        }
    }

    public function getUserDetail($id){
        $user_detail = User::join('user_details','user_details.user_id','=','users.id')
            ->join('roles','user_details.role_id','=','roles.id')
            ->join('countries','user_details.country_id','=','countries.id')
            ->join('states','user_details.state_id','=','states.id')
            ->join('cities','user_details.city_id','=','cities.id')
            ->where('users.id',$id)
            ->select('users.*', 'user_details.*','roles.role','countries.country','states.state','cities.city')  
            ->first();


            $html = '';
                $html .= "<div class='card'>";
                    $html .= "<div class='card-body'>";
                        $html .= "<div class='row'>";
                            $html .= "<div class='col-md-4'>".$user_detail->mobile."</div>";
                            $html .= "<div class='col-md-8 text-end'>".strtoupper($user_detail->email)."</div>";
                        $html .= "</div>";
                    $html .= "</div>";
                $html .= "</div>";

                $html .= "<div class='card'>";
                    $html .= "<div class='card-body table-responsive p-0' >";

                        $html .= "<table class='table table-head-fixed text-nowrap'>";
                            $html .= "<tbody>";
                                $html .= "<tr>";
                                    $html .= "<th>Id</th>";
                                    $html .= "<td>".$user_detail->unique_id."</td>";
                                $html .= "</tr>";
                                $html .= "<tr>";
                                    $html .= "<th>Role</th>";
                                    $html .= "<td>".ucwords($user_detail->role)."</td>";
                                $html .= "</tr>";
                                $html .= "<tr>";
                                    $html .= "<th>Name</th>";
                                    $html .= "<td>".ucwords($user_detail->name)."</td>";
                                $html .= "</tr>";
                                $html .= "<tr>";
                                    $html .= "<th>PAN</th>";
                                    $html .= "<td>".strtoupper($user_detail->pan)."</td>";
                                $html .= "</tr>";
                                $html .= "<tr>";
                                    $html .= "<th>Joining Amount</th>";
                                    $html .= "<td>".$user_detail->join_amount."</td>";
                                $html .= "</tr>";
                            $html .= "</tbody>";
                        $html .= "</table>";
                    $html .= "</div>";
                $html .= "</div>";

                $html .= "<div class='card'>";
                    $html .= "<div class='card-body'>";
                        $html .= "<div class='row'>";
                            $html .= "<div class='col-md-3'>".ucwords($user_detail->country)."</div>";
                            $html .= "<div class='col-md-5 text-center'>".ucwords($user_detail->state)."</div>";
                            $html .= "<div class='col-md-4 text-end'>".ucwords($user_detail->city)."</div>";
                        $html .= "</div>";
                    $html .= "</div>";
                $html .= "</div>";


        return $result = [
            "html"=>$html
        ];
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

    // async generateRandomVleId() {
    //     const unique_id = CustomFunction.randomUserId();
    //     try {
    //       const unique_id_exist = await User.exists({ vle_id: unique_id });
    //       if (unique_id_exist) {
    //         generateRandomVleId();
    //       }
    //     } catch (err) {
    //       return next(err);
    //     }
    //     return unique_id;
    //   },


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
