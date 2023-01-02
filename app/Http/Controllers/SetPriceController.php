<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CouponPrice;
use App\Models\Role;
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
}
