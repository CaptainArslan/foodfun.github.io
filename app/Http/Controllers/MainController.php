<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;

class MainController extends Controller
{
    //
    public function index()
    {
        $obj = new MainModel();
        $dished = ['dishes' => $obj->get_dishes()];
        $updated_dishes = ['updated_dishes' => $obj->updated_dishes()];
        return view('index', $dished, $updated_dishes);
    }
   
}
