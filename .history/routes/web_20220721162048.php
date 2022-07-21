<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [ListingController::class, 'index']);


//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('listings/{listing}/edit', [ListingController::class, 'edit']);

//Edit Submit to Update
Route::put('/listings/{listing}',[ListingController::class,'update']

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);













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



// Route::get('/listings/{id}',function($id){
//     $listing =ModelsListing::find($id);
//     if($listing){
//         return view('listing',['listing'=>$listing,]);
//     } else{ abort('404'); }});