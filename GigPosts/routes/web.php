<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GigsController;
use App\Models\User;
use App\Models\Gig;

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

Route::get('/{message?}', function (String $message = null) {
   $gigs=Gig::all();
    return view('home',["gigs"=>$gigs,"message" => $message]);
})->name('/');

Route::get('/login',function(){
   return view('login');
})->middleware('auth:login');

Route::get('/register',function(){
   return view('register');
});

Route::get('/gigs',function(){
   return view('gigs.add');
});

// Route::get('gig/apply/{id}',function($id){
//    echo $id;
// });

Route::get('gig/edit/{id}',function($id){
   $data = Gig::find($id);
   return view('gigs.edit',["data"=>$data]);
});

Route::get('gig/delete/{id}',function($id){
   Gig::find($id)->delete();
   return redirect('admin');
});

Route::get('logout',function(){
   session()->forget("username");
   session()->forget("userId");
   return redirect('/');
});

Route::post('/user/register',[UserController::class,'newUser']);

Route::post('user/login',[UserController::class,'userLogin']);

Route::post('gig/add',[GigsController::class,'addGig']);

Route::post('gig/{id}/edit',[GigsController::class,'editGig'])->name('edit');

Route::post('gig/search',[GigsController::class,'searchGigs']);

Route::any('admin',function(){
   $gigs=User::find(session("userId"))->getUserGigs;
   if ($gigs){
       return view('admin',["gigs"=>$gigs]);
   }else{
      return "Something went wrong,please try again later.";
   }
})->middleware('auth:admin');
