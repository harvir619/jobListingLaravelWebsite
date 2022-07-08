<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing as ModelsListing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ALL Listings
Route::get('/', function () {
    return view('welcome',
    [
        'heading'=>'Latest Gigs',
       'listings'=>ModelsListing::all(),
      
       ]
);
});

// Route::get("/hello",function(){
//     return response('<h1>Hello</h1>',200)
//     ->header('Content-Type','text/plain')
//     ->header('foo','bar');
// });

// Route::get("/posts/{id}",function($id){
//     ddd($id);
//     return response('Post'.$id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     dd($request->name.'   '.$request->city);
// });

Route::get('/listings/{id}',function($id){
    return view('listing',
    [
       'listing'=>ModelsListing::find($id),
      
       ]
);
});