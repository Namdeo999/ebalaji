<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Role;
use App\Models\SetPrice;
use App\Models\CouponPrice;
use App\MyApp;

class SetPriceController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all('id', 'role');
        return view('content.set_price', [
            'roles'=>$roles
        ]); 
    }

    public function setPartnerPrice(Request $req)
    {
        $user_id = session('LOGIN_ID');
        if ($user_id > 0) {
            $user_id_validation = '';
        }else{
            $user_id_validation = 'required';
        }
        $validator = Validator::make($req->all(),[
            // 'role_id' => 'required|unique:users,mobile,'.$req->input('mobile'),
            // 'email' => 'required|unique:users,email,'.$req->input('email'),
            'user_id' => $user_id_validation,
            'role_id' => 'required|max:191',
            'partner_price' => 'required|numeric|not_in:0',
            
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $role_id = $req->input('role_id');
            $data = SetPrice::where(['user_id'=>$user_id,'role_id'=>$role_id])->first('id');
            if ($data == null) {
                $model = new SetPrice ;
                $model->user_id = $user_id;
                $model->role_id = $role_id;
                $model->partner_price = $req->input('partner_price');
            }else {
                $model = SetPrice::find($data->id) ;
                $model->partner_price = $req->input('partner_price');
            }
            if ($model->save()) {
                return response()->json([
                    'status'=>200,
                ]);
            }
        }
        
    }

    public function setCouponPrice(Request $req)
    {
        $partner_id = session('LOGIN_ID');
        if ($partner_id > 0) {
            $partner_id_validation = '';
        }else{
            $partner_id_validation = 'required';
        }

        $validator = Validator::make($req->all(),[
            // 'role_id' => 'required|unique:users,mobile,'.$req->input('mobile'),
            // 'email' => 'required|unique:users,email,'.$req->input('email'),
            'partner_id' => $partner_id_validation,
            'coupon_type' => 'required|max:191',
            'role_id' => 'required|max:191',
            'coupon_price' => 'required|numeric|not_in:0',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $role_id = $req->input('role_id');
            $coupon_type = $req->input('coupon_type');
            $coupon_price = $req->input('coupon_price');
            $data = CouponPrice::where(['partner_id'=>$partner_id,'role_id'=>$role_id, 'coupon_type'=>$coupon_type])->first('id');

            if ($data == null) {
                $model = new CouponPrice ;
                $model->partner_id = $partner_id;
                $model->role_id = $role_id;
                $model->coupon_type = $coupon_type;
                $model->coupon_price = $coupon_price;
                
            }else {
                $model = CouponPrice::find($data->id) ;
                $model->coupon_price = $coupon_price;
            }

            if ($model->save()) {
                return response()->json([
                    'status'=>200,
                ]);
            }
        }
        
    }
}
