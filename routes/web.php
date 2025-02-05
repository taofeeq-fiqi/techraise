<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Laravel\Prompts\password;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes convention:
/*
index - show all listings
show - show single listing
create -   show form to create new listing
store - store new listing
edit - show form to edit listing
update - update listing
destroy - delete listing

*/



//All Listing
Route::get('/',[ListingController::class,'index']);



//Show create Form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

//Store  Listings Data
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');;


//Update Listing
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');;


//delete Listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');


//Manage Listings
Route::get('listings/manage',[ListingController::class,'manage'])->middleware('auth');


//Single Listings
Route::get('/listings/{listing}',[ListingController::class,'show']);


//Show Register/Create Form
Route::get('/register',[UserController::class,'create'])->middleware('guest');


//Create New User
Route::post('/users',[UserController::class,'store']);

//logout user
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//show password reset  form
// Route::get('/forget-password', [UserController::class,'forgetPassword']);

Route::get('/forget-password',[AuthController::class,'forgetpassword']);
Route::post('/forget-password',[AuthController::class,'postForgetPassword']);
Route::get('/reset/{token}',[AuthController::class,'reset']);
Route::post('/reset/{token}',[AuthController::class,'Postreset']);



//show login form
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

// password reset
// Route::get('/passwordreset',[PasswordController::class,'reset']);


//log in user
Route::post('users/authenticate',[UserController::class,'authenticate']);

//All listing
// Route::get('/', function () {
//     //lets just say we want a heading

// });

//single listing
// Route::get('/listings/{listing}',function(Listing $listing){

// });


Route::get('/hello',function(){
    return "hello word";
});

Route::get('/hi/{id}',function($id){
    return response('you enter '.$id);
})->where('id','[0-9]+');

Route::get('/hii/{id}',function($id){
    // dd($id);
    // ddd($id);
    return response('you typed  '.$id);
})->where('id','[A-Za-z]+');



Route::get('/hye',function(){
    return response('<h1>welcome to my website </h1>',200)
    ->header('Content-Type','text/plain')
    ->header('laravel-version','laravel 10');

});


//helper methods for debugging
/* dd(); die dump
ddd(); die dump and debug */


//Request response
Route::get('/search', function(Request $request){
    // dd($request);
    dd($request->name.' '.$request->city);
});




Route::get('/about.com/{name}',function($name){
    echo "welcome .$name";
});

