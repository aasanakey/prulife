<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class CountryStateCityController extends Controller
{
    public function getState(Request $request)
    {
        $states = State::where('country_id', $request->country_id)->get();
        return response()->json(['states'=>$states],200);
    }

    public function getCity(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->get();
        return response()->json(['cities'=>$cities], 200);
    }

    // public function getCountryCity(Request $request)
    // {
    //     $states = State::where('country_id', $request->country_id)->get();
    //     return response()->json($states, 200);
    // }
}