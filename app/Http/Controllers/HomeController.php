<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index()
    {
        // $visitor = Visitor::first();        
        // $new_count = $visitor->visitor+1;
        // $visitor->visitor = $new_count;
        // $visitor->save();
        // return view('home', compact('new_count'));
        return view('welcome');
    }
}
