<?php

namespace App\Http\Controllers\frontend;

use App\Models\Thana;
use App\Models\Region;
use App\Models\District;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::select('id', 'user_id', 'offer_id', 'district_id', 'thana_id', 'region_id', 'amount_of_land_en', 'amount_of_land_bn', 'near_by_en', 'near_by_bn', 'minimum_price_en', 'minimum_price_bn', 'road_en', 'house_en', 'floor_en', 'flat_space_en', 'no_of_bedroom_en', 'rent_per_month_en', 'rent_from_month', 'cover_image')
            ->with('user', 'offer', 'district', 'thana', 'region')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate(12);

        $districts = District::all();
        /*
        echo "<pre>";
        print_r($properties);
        die();
*/
        return view('pages.frontend.property', ['properties' => $properties, 'districts' => $districts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            $property = Property::with('user', 'offer', 'district', 'thana', 'region', 'images')->findOrFail($id);
            return view('pages.frontend.propertyDetails', ['property' => $property]);
        } else {
            return redirect()->back();
        }
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_property(Request $request)
    {
        $this->validate($request, [
            'buyer-choice' => 'required',
            'district' => 'required',
            'thana' => 'required',
            'region' => 'required'
        ], [
            'buyer-choice.required' => 'Select Offer',
            'district.required' => 'Select District',
            'thana.required' => 'Select Thana',
            'region.required' => 'Select Region'
        ]);

        $buyerChoice = $request->input('buyer-choice');
        $district = $request->input('district');
        $thana = $request->input('thana');
        $region = $request->input('region');
        $landArea = $request->input('land-area');
        $flatArea = $request->input('flat-area');

        if ($request->has('land-area') && !empty($request->input('land-area'))) {
            $landArea = $request->input('land-area');
            if ($landArea == 1) {
                $minArea = 2;
                $maxArea = 4.9;
            } else if ($landArea == 2) {
                $minArea = 5;
                $maxArea = 7.9;
            } else if ($landArea == 3) {
                $minArea = 8;
                $maxArea = 10.9;
            } else {
                $minArea = 11;
                $maxArea = 500;
            }
            $properties = Property::select('id', 'user_id', 'offer_id', 'district_id', 'thana_id', 'region_id', 'amount_of_land_en', 'amount_of_land_bn', 'near_by_en', 'near_by_bn', 'minimum_price_en', 'minimum_price_bn', 'cover_image')
                ->with('user', 'offer', 'district', 'thana', 'region')
                ->where('amount_of_land_en', '>=', $minArea)
                ->where('amount_of_land_en', '<=', $maxArea)
                ->where('offer_id', $buyerChoice)
                ->where('district_id', $district)
                ->where('thana_id', $thana)
                ->where('region_id', $region)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->paginate(12);
        }

        if ($request->has('flat-area') && !empty($request->input('flat-area'))) {
            $flatArea = $request->input('flat-area');

            if ($flatArea == 1) {
                $minArea = 500;
                $maxArea = 800;
            } else if ($flatArea == 2) {
                $minArea = 801;
                $maxArea = 1100;
            } else if ($flatArea == 3) {
                $minArea = 1101;
                $maxArea = 1400;
            } else if ($flatArea == 4) {
                $minArea = 1401;
                $maxArea = 1700;
            } else if ($flatArea == 5) {
                $minArea = 1701;
                $maxArea = 2000;
            } else {
                $minArea = 2001;
                $maxArea = 5000;
            }


            $properties = Property::select('id', 'user_id', 'offer_id', 'district_id', 'thana_id', 'region_id', 'road_en', 'house_en', 'floor_en', 'flat_space_en', 'no_of_bedroom_en', 'rent_per_month_en', 'rent_from_month', 'cover_image')
                ->with('user', 'offer', 'district', 'thana', 'region')
                ->where('flat_space_en', '>=', $minArea)
                ->where('flat_space_en', '<=', $maxArea)
                ->where('offer_id', $buyerChoice)
                ->where('district_id', $district)
                ->where('thana_id', $thana)
                ->where('region_id', $region)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->paginate(12);
        }
        /*
        echo "<pre>";
        print_r($properties);
        die();
*/
        $districts = District::all();
        return view('pages.frontend.property', ['properties' => $properties, 'districts' => $districts]);
    }
}
