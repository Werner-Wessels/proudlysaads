<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Offer;
use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show($id)
    {
        $user = Auth::user();
        $listings = Listing::with('offers')->where('user_id', '=', '1')->get();
        $profile = Profile::all()->where('user_id', '=', \Auth::user()->id);


        return view('profile.show', [
            'profile' => $profile,
            'user' => $user,
            'listings' => $listings,


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('profile.edit')->with(
            [
                'profile' => Profile::where('user_id', Auth::user()->id),
                'user' => Auth::user()
            ]
        );
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
        $validated=$request->validate(
            [
                'contact_number' => 'required|integer',
                'address1' => 'required|string',
                'address2' => 'required|string',
                'city' => 'required|string',
                'province' => 'required|string',
            ]
        );
        $profile = Profile::find($id);
        $profile->contact_number = $request->get('contact_number');
        $profile->address1 = $request->get('address1');
        $profile->address2 = $request->get('address2');
        $profile->city = $request->get('city');
        $profile->province = $request->get('province');
        $profile->save();
        return redirect()->back()->with('success', 'Profile updated, thank you.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
