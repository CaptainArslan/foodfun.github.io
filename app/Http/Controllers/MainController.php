<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;

class MainController extends Controller
{

    /**
     * 
     */
    public function index()
    {
        return view('index');
    }

    /**
     * return blog detail view with default component
     */
    public function blog_details()
    {
        return view('blog-details');
    }

    /**
     * 
     */
    public function menu()
    {
        return view('menu');
    }

    /**
     * 
     */
    public function blog()
    {
        return view('blog-home');
    }

    /**
     * 
     */
    public function contact_us()
    {
        return view('contact-us');
    }

    /**
     * 
     */
    public function about()
    {
        return view('about');
    }
}
