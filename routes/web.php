<?php

use App\Models\User;
use App\Models\Dishes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Role;

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

Route::get('/welcome', function () {
   return view('welcome');
});

Route::get('/', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
Route::get('/blog-details', [MainController::class, 'blog_details']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/contact-us', [MainController::class, 'contact_us']);
Route::get('/menu', [MainController::class, 'menu']);
Route::get('/about', [MainController::class, 'about']);

//-------------------------
//       Eloquent ORM
// ------------------------


// Route::get('/insert', function () {
//    $dishes = new Dishes;
//    $dishes = Dishes::find(9);
//    $dishes->name = 'Burger';
//    $dishes->code = 'burger_code';
//    $dishes->tagline = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, illum!';
//    $dishes->description = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, illum!';
//    $dishes->price = 120;
//    $dishes->foodimage = 'food1.jpg';
//    $dishes->save();
// });


Route::get('/create', function(){
   User::create([
      'name' => 'Arslan',
      'email' => 'arslan@gmail.com',
      'password' => Hash::make(12345678),
   ]);
});

// Route::get('/createrole', function(){
//    Role::create([
//       'name' => 'Subscriber',
//    ]);
// });


// Route::get('/softdelete', function(){
//    $dish = Dishes::find(7)->delete();
// });


// Route::get('/readsoftdelete', function(){
//    $dish = Dishes::onlyTrashed()->get();
//    return $dish;
// });


// Route::get('/restore', function(){
//    $dish = Dishes::onlyTrashed()->where('id',6)->restore();
//    return $dish;
// });


// Route::get('/forcedelete', function(){
//    $dish = Dishes::onlyTrashed()->where('id',7)->forceDelete();
//    return $dish;
// });

Route::get('user/{id}/dish',function($id){
   # code...

   return User::find($id)->userdish;
});


Route::get('user/{id}/role',function($id){
   # code...

   return User::find($id)->roles()->orderby('id', 'DESC')->get();
});