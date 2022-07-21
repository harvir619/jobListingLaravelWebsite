<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Get and Show All Listings
    public function index()
    {
        //dd(request('tag'));
        return view(
            'listings.index',
            [
                'heading' => 'Latest Gigs',
                'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),

            ]
        );
    }
    //Show Single Listing
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing,]);
    }


    //Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    //Store Form Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'

        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);


        return redirect('/')->with('message', 'Listing created Successfully!');
    }



    //Show Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'

        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);


        return back()->with('message', 'Listing updated Successfully!');
    }


    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->
    }
}