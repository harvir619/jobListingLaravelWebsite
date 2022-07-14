<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Get and Show All Listings
    public function index() {
        //dd(request('tag'));
        return view('listings.index',
        [
            'heading'=>'Latest Gigs',
           'listings'=>Listing::latest()->filter(request(['tag','search']))->get(),
          
           ]
    );
}
    //Show Single Listing
    public function show(Listing $listing) {
        return view('listings.show',['listing'=>$listing,]);
    }


    //Show Create Form
    public function create() {
        return view('listings.create');
    }

        //Store Form Listing Data
        public function store(Request $request) {
            dd($request->all());
        }
}
