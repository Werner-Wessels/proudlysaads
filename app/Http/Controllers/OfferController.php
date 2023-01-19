<?php

namespace App\Http\Controllers;

use App\Events\OfferCreated;
use App\Models\Listing;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OfferController extends Controller
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
    public function create(Request $request)
    {
//        dd($request);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->query('listing_id');
        $listing = Listing::find($id);
        $request->validate([
            'offer' => 'required|integer',
        ]);
        $price= $request->offer;

        $offer = Offer::create([
            'listing_id' => $id,
            'user_id' => auth()->user()->id,
            'price' => $price
        ]);

        $listing = Listing::where('id', '=', $offer->listing_id)->first();

        $seller = User::where('id', '=', $listing->user_id )->first();



        Mail::send('mail.adminnewoffer', array(
            'title' => $listing->title,
            'price' => $listing->price,
            'offer' => $request->get('offer'),
        ), function($message) use ($seller, $request){
            $message->from('info@proudlysaads.co.za');
            $message->to($seller->email, 'Admin')->subject('A new offer has been made on your listing.');
        });

        return redirect()->back()->with('success','Thank you for you Offer!! We will notify the person that uploaded the listing of your offer for their consideration.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //
    }
}
