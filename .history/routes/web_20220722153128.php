<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Registration/Create Form
Route::get('/register',[UserController::class,'create']);

//Create New Users
Route::post('/users',[])













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