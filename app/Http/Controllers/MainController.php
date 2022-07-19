<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;

class MainController extends Controller
{

    public function index()
    {
        $dishes = ['dishes' => get_dishes()];
        $updated_dishes = ['updated_dishes' => updated_dishes()];
        $customer_review = ['customer_review' => customer_review()];
        // dd($customer_review);
        return view('index', $dishes, $updated_dishes, $customer_review);
    }

    /**
    * return blg detail view with default component
    */
    public function blog_details()
    {
        $dishes = ['dishes' => get_dishes()];
        $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('blog-details', $dishes, $updated_dishes);
    }

    public function blog()
    {
        return view('blog-home');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function menu()
    {
        $dishes = ['dishes' => get_dishes()];
        $updated_dishes = ['updated_dishes' => updated_dishes()];
        return view('menu', $dishes, $updated_dishes);
    }

    public function about()
    {
        return view('about');
    }
   
}
