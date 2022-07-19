<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/welcome', function ()
{
   return view('welcome');
});

Route::get('/', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
// Route::get('/index', [MainController::class, 'blog_details']);
// Route::get('/index', function () { return view('index'); });

Route::get('/blog-details', [MainController::class, 'blog_details']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/contact-us', [MainController::class, 'contact_us']);
Route::get('/menu', [MainController::class, 'menu']);
Route::get('/about', [MainController::class, 'about']);
