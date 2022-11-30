<?php

namespace App\Http\Controllers;

use App\Events\ListingCreated;
use App\Models\Category;
use App\Models\Listing;
use App\Models\Location;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ListingController extends Controller
{
    public function __construct() {

        $this->middleware('auth', ['only' => ['create']]);

    }

    public function index()
    {
//        $listings = Listing::all();
//        $categories = Category::all();
//        $locations = Location::all();
//        return View::
        return view('shop', [
            'listings' => Listing::with('category', 'location')->where([['is_approved', '=', true],['is_active','=',true]])->paginate(10),
            'categories' => Category::all(),
            'locations' => Location::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('sell')->with(
            [
                'categories' => Category::all(),
                'locations' => Location::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

      $validated = $request->validate([
           'title' => 'required|string',
           'description' => 'required|string',
           'condition' => 'required|string',
           'image_url' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'price' => 'required',
           'category_id' => 'required',
           'location_id' => 'required'
        ]);

            $name = now()->timestamp.".{$request->image_url->getClientOriginalName()}";
            $path = $request->file('image_url')->storeAs('public', $name);

            $listing = Listing::create([
                'title' => $request->title,
                'description' => $request->description,
                'condition' => $request->condition,
                'image_url' => $name,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'location_id' => $request->location_id,
            ]);


            $admin = User::where('location_id','=', $listing->location_id)->first();

            $listing->email = $admin->email;

            $seller = Auth::user();

            $profile = Profile::where('user_id', '=', $seller->id)->first();

            Mail::send('mail.newlisting', array(
                'seller' => $seller->name,
                'sellerMail' => $seller->email,
                'sellerContactNumber' => $profile->contact_number,
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'condition' => $request->get('condition'),
                'price' => $request->get('price'),
            ), function($message) use ($listing, $request){
                $message->from('info@tickeyturners.co.za');
                $message->to($listing->email, 'Admin')->subject('A new listing has been created in your area');
            });

            return redirect()->back()->with('success','Listing Uploaded Successfully!! Please allow your Branch Principal to verify this listing before it will be live.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(int $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $listing = Listing::findOrFail($id);
        if ($listing->user_id === auth()->user()->id)
        return view('listings.edit')->with([
            'listing' => $listing,
            'categories' => Category::all(),
            'locations' => Location::all()
        ]);
        else
            return redirect()->route('profile.show', auth()->user()->id);

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'condition' => 'required|string',
            'image_url' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'category_id' => 'required',
            'location_id' => 'required'
        ]);
        $listing = Listing::findOrFail($id);
        if($request->file != ''){
            $name = now()->timestamp.".{$request->image_url->getClientOriginalName()}";
            $path = $request->file('image_url')->storeAs('public', $name);

            $listing->image_url = $name;
        }
        $listing->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'category_id' => $request->get('category_id'),
            'location_id' => $request->get('location_id'),
            'image_url' => $listing->image_url,
        ]);

        return redirect()->back()->with('success','Listing Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()->with('success','Listing Deleted Successfully!!');
    }
}
