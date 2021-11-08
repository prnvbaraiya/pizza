<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class FrontendController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::latest()->get();
        return view('frontpage',compact('pizzas'));
    }
}
