<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Listing;
use App\Models\Offer;
use App\Models\Profile;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $listings = Listing::all()->where('user_id', '=', Auth::id());
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
                'user' => User::with('profile')->findOrFail(Auth::id()),
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
                'contact_number' => 'required',
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

        $user = $profile->user;
        $id_img_path = $request;
        $user->id_img_path = $request->file('id_copy')->store('storage', ['disk' => 'my_files']);
        $user->selfie_path = $request->file('selfie')->store('storage', ['disk' => 'my_files']);
        $user->save();

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
