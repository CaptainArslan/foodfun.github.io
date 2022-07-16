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

Route::get('/', [MainController::class, 'index']);
Route::get('/index', [MainController::class, 'index']);
// Route::get('/index', function () { return view('index'); });

Route::get('/blog-details', function () { return view('blog-details'); });
Route::get('/blog', function () { return view('blog-home'); });
Route::get('/contact-us', function () { return view('contact-us'); });
Route::get('/menu', function () { return view('menu'); });
Route::get('/about', function () { return view('about'); });
