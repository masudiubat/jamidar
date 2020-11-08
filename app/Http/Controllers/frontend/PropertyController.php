<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\District;
use App\Models\Thana;
use App\Models\Region;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontend.property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo "Got this " . $id;
        return view('pages.frontend.propertyDetails');
    }

    public function district_to_thana($id)
    {
        $thanas = Thana::where('district_id', $id)->get();

        return response()->json(['thanas' => $thanas], 200);
    }


    public function thana_to_localarea($id)
    {
        $localAreas = Region::where('thana_id', $id)->get();
        return response()->json(['localAreas' => $localAreas], 200);
    }
}
