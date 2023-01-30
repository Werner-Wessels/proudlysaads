<?php

namespace App\Http\Controllers;

use App\Events\ListingCreated;
use App\Models\Category;
use App\Models\Image;
use App\Models\Listing;
use App\Models\Location;
use App\Models\Profile;
use App\Models\subCategory;
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
        return view('shop', [
            'listings' => Listing::orderBy('promoted', 'DESC')->orderBy('created_at', 'DESC')->with('category', 'location', 'images')->where([['is_approved', '=', true],['is_active','=',true]])->paginate(10),
            'categories' => Category::all(),
            'locations' => Location::all()
        ]);
    }

    public function selectCategory(){
        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }

    public function selectSubCategory($id){
        $category = Category::where('id', '=', $id)->first();
        $subCategories = subCategory::all()->where('category_id', '=', $category->id);

        if (count($subCategories)){
            return view('subcategory.index', [
                'subCategories' => $subCategories,
                'category' => $category
            ]);
        }
        else{
            return view('sell',[
                'category' => $category,
                'locations' => Location::all(),
            ]);
        }
    }

    public function sellForm($subcategory){

        $subcategory = subCategory::all()->where('id','=', $subcategory)->firstOrFail();
        $category = category::all()->where('id','=', $subcategory->category->id)->firstOrFail();

        return view('sell',[
            'category' => $category,
            'subcategory' => $subcategory,
            'locations' => Location::all(),
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
      $this->validate($request,[
           'title' => 'required|string|max:255',
           'description' => 'required|string|max:855',
           'condition' => 'required|string',
           'price' => 'required',
           'category_id' => 'integer | required',
           'subcategory_id' => 'integer',
           'location_id' => 'required'
        ]);

      $listing = new Listing;
      $listing->title = $request->title;
      $listing->description = $request->description;
      $listing->condition = $request->condition;
      $listing->price = $request->price;
      $listing->category_id = $request->category_id;
      $listing->subcategory_id = $request->subcategory_id;
      $listing->location_id = $request->location_id;
      $listing->save();
        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path = $imagefile->store('storage', ['disk' =>   'my_files']);
            $image->img_path = $path;
            $image->listing_id = $listing->id;
            $image->save();
        }

        $admin = User::where('location_id','=', $listing->location_id)->first();

            $listing->email = 'info@proudlysaads.co.za';

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
                $message->from('noreply@proudlysaads.co.za');
                $message->to($listing->email, 'Admin')->subject('A new listing has been created, please review');
            });

            return redirect()->back()->with('success','Listing Uploaded Successfully!! Please allow Proudly SA Ads to verify this listing before it will be live.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('listings.show')->with([
            'listing' => Listing::with('user', 'images')->where('id','=', $id)->firstOrFail()
        ]);
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
            'price' => 'required',
            'category_id' => 'required',
            'location_id' => 'required'
        ]);
        $listing = Listing::findOrFail($id);
        $listing->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'category_id' => $request->get('category_id'),
            'location_id' => $request->get('location_id'),
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
