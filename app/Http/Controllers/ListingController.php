<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Termwind\Components\Li;

class ListingController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return inertia(
      'Listing/index-page',
      [
        'listings' => Listing::all()
      ]
    );
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return inertia('Listing/create-page');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    Listing::create(
      $request->validate([
        'beds' => 'required|integer|max:5',
        'baths' => 'required|integer|max:5',
        'area' => 'required|integer|min:15|max:1500',
        'price' => 'required|integer|min:1000|max:10000000',
        'code' => 'required',
        'street_num' => 'required',
        'city' => 'required',
        'street' => 'required',
      ]),
    );
    return redirect()->route('listing.index')
      ->with('success', 'Listing created successfully!');
  }

  /**
   * Display the specified resource.
   */
  public function show(Listing $listing)
  {
    return inertia(
      'Listing/show-page',
      [
        'listing' => $listing
      ]
    );
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Listing $listing)
  {
    return inertia(
      'Listing/edit-page',
      [
        'listing' => $listing
      ]
    );
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Listing $listing)
  {
    $listing->update(
      $request->validate([
        'beds' => 'required|integer|max:5',
        'baths' => 'required|integer|max:5',
        'area' => 'required|integer|min:15|max:1500',
        'price' => 'required|integer|min:1000|max:10000000',
        'code' => 'required',
        'street_num' => 'required',
        'city' => 'required',
        'street' => 'required',
      ]),
    );
    return redirect()->route('listing.index')
      ->with('success', 'Listing updated successfully!');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Listing $listing)
  {
    $listing->delete();

    return redirect()->back()
      ->with('success', 'Listing deleted successfully!');
  }
}
