<?php

namespace App\Http\Controllers\frontend;

use App\Models\Property;
use App\Models\Favourite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $favouriteItems = Favourite::with('user', 'property')
            ->where('user_id', $id)
            ->get();
        /*
        echo "<pre>";
        print_r($favouriteItems);
        die();
*/
        return view('pages.user.favourite', ['favouriteItems' => $favouriteItems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $userId = Auth::user()->id;

        if (Favourite::where('user_id', $userId)->where('property_id', $id)->exists()) {
            Toastr::warning('W00ps! you have already selected this properties as favourite', 'warning');
            return redirect()->back();
        } else {
            $userFavourite = Favourite::where('user_id', $userId)->count();

            if ($userFavourite >= 0 && $userFavourite < 3) {
                $favourite = new Favourite();
                $favourite->user_id = Auth::user()->id;
                $favourite->property_id = $id;
                $favourite->created_at = date('Y-m-d');
                $result = $favourite->save();

                if ($result) {
                    Toastr::success('Project Category info has saved.', 'success');
                    return redirect()->back();
                } else {
                    Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
                    return redirect()->back();
                }
            } else {
                Toastr::warning('W00ps! You can select only 3 properties as favourite adn you already selected 3 properties. ', 'warning');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::with('user', 'offer', 'district', 'thana', 'region', 'images')->findOrFail($id);
        return view('pages.user.favouriteDetails', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userId = Auth::user()->id;

        $result = Favourite::where('user_id', $userId)->where('property_id', $id)->delete();

        if ($result) {
            Toastr::success('Successfully delete property from your favourite list.', 'success');
            return redirect()->route('user.favourite.list');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
