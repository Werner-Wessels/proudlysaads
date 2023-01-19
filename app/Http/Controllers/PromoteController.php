<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromoteController extends Controller
{
    public function create($id){
        $listing = Listing::findOrFail($id);
        if ($listing->user_id === auth()->user()->id)
            return view('promotion.create')->with([
                'listing' => $listing,
                'user' => User::with('profile')->where('id', '=',Auth::id())->firstOrFail(),
            ]);
        else
            return redirect()->route('profile.show', auth()->user()->id);
    }
}
