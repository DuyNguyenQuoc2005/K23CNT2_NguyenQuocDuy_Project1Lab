<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nqdProductController extends Controller
{
    public function index()
    {
        $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
        return view('welcome',compact('fruits'));
    }
}
