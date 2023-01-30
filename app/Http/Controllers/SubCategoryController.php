<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Location;
use App\Models\subCategory;
use App\Http\Requests\StoresubCategoryRequest;
use App\Http\Requests\UpdatesubCategoryRequest;

class SubCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoresubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = subCategory::all()->where('id', '=', $id)->firstOrFail();
        $listings = Listing::all()
            ->where('subcategory_id', '=', $id)
            ->where('is_active', '=', true)
            ->where('is_approved','=',true );

        return view('subCategory.show', [
            'subcategory' => $subcategory,
            'listings' => $listings,
            'categories' => Category::all(),
            'locations' => Location::all(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubCategoryRequest  $request
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubCategoryRequest $request, subCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subCategory $subCategory)
    {
        //
    }
}
