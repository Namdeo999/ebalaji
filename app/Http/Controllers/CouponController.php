<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Coupon;
use App\Models\CouponPrice;
use App\Models\User;
use App\Models\UserDetail;
use App\MyApp;

class CouponController extends Controller
{
    //
    public function index()
    {
        return view('content.coupon', [
            
        ]); 
    }

    public function getUserDetail($coupon_type, $unique_id){
        $data = UserDetail::where(['unique_id'=>$unique_id])->first(['id','name','user_id','partner_id','role_id']);
        if ($data != null) {
            if ($data->role_id == MyApp::RETAILER) {
                $coupon_price = CouponPrice::where(['partner_id'=>$data->partner_id, 'role_id'=>$data->role_id, 'coupon_type'=>$coupon_type])->value('coupon_price');
                $result = [
                    'user_name'=>$data->name,
                    'user_id'=>$data->user_id,
                    'coupon_price'=> $coupon_price ,
                ];
                return response()->json([
                    'status'=> 200,
                    'data'=> $result,
                ]);
            }
        }
        return response()->json([
            'status'=> 400,
        ]);
    }

    public function saveDistributeCoupon(Request $req){
        
        $validator = Validator::make($req->all(),[
            // 'role_id' => 'required|unique:users,mobile,'.$req->input('mobile'),
            // 'email' => 'required|unique:users,email,'.$req->input('email'),
            'user_id' => 'required',
            'coupon_type' => 'required',
            'no_of_coupon' => 'required',
            // 'coupon_amount' => 'required|numeric|not_in:0',
            
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{

            $model = new Coupon;
            $model->user_id = $req->input('user_id');
            $model->coupon_type = $req->input('coupon_type');
            $model->no_of_coupon = $req->input('no_of_coupon');
            // $model->coupon_amount = 100;
         
            if ($model->save()) {
                return response()->json([
                    'status'=>200,
                ]);
            }
        }
        return response()->json([
            'status'=> 200,
        ]);
        
    }

}
