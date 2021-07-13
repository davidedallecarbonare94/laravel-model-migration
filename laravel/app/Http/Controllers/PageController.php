<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class PageController extends Controller
{
    public function index(){
        $flights = Flight::all();
        return view('home', compact('flights'));
    }
    
    public function about(){
        return view('about');
    }
    public function contacts(){
        return view('contacts');
    }
}
