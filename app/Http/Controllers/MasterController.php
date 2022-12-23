<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class MasterController extends Controller
{
    //
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

}
