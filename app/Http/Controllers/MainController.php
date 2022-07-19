<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;

class MainController extends Controller
{
    //
    // public function index()
    // {
    //     $dished = ['dishes' => get_dishes()];
    //     $updated_dishes = ['updated_dishes' => updated_dishes()];
    //     return view('index', $dished, $updated_dishes);
    // }
    public function index()
    {
        $dished = ['dishes' => get_dishes()];
        $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('index', $dished, $updated_dishes);
    }

    /**
    * return blg detail view with default component
    */
    public function blog_details()
    {
        $dished = ['dishes' => get_dishes()];
        $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('blog-details', $dished, $updated_dishes);
    }

    public function blog()
    {
        return view('blog-home');
    }

    public function contact_us()
    {
        // $dished = ['dishes' => get_dishes()];
        // $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('contact-us');
    }

    public function menu()
    {
        $dished = ['dishes' => get_dishes()];
        $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('menu', $dished, $updated_dishes);
    }

    public function about()
    {
        // $dished = ['dishes' => get_dishes()];
        // $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('about');
    }
   
}
