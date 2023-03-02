<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Listing;
use App\Http\Requests\Listings\UpdateRequest;
use App\Http\Requests\Listings\ListingRequest;

class ListingController extends Controller
{
    public function index()
    {
        return Inertia::render('Listing/Index', [
            'listings' => Listing::all(),
        ]);
    }

    public function show(Listing $listing)
    {
        return Inertia::render('Listing/Show', [
            'listing' => $listing,
        ]);
    }

    public function create()
    {
        return Inertia::render('Listing/Create');
    }

    public function store(ListingRequest $request)
    {
        Listing::create($request->validated());

        return redirect()->route('listings.index')->with('success', 'Listing was created !');
    }

    public function edit(Listing $listing)
    {
        return Inertia::render('Listing/Edit', [
            'listing' => $listing
        ]);
    }

    public function update(Listing $listing, UpdateRequest $request)
    {
        $listing->update($request->validated());

        return redirect()->route('listings.index')->with('success', 'Listing was updated !');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()->with('success', 'Listing was deleted !');
    }
}
