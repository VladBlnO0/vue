<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ListingController extends \Illuminate\Routing\Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->authorizeResource(Listing::class, 'listing');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filters = $request->only([
            'priceFrom',
            'priceTo',
            'beds',
            'baths',
            'areaFrom',
            'areaTo',
        ]);

        return inertia(
            'Listing/IndexPage', [
                'filters' => $filters,
                'listings' => Listing::latest()->filter($filters)->paginate(9)->withQueryString(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->user()->listings()->create(
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/CreatePage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        $this->authorize('view', $listing);

        return inertia(
            'Listing/ShowPage',
            [
                'listing' => $listing,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia(
            'Listing/EditPage',
            [
                'listing' => $listing,
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
}
