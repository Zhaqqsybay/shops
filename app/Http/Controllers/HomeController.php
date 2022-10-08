<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function secpage(){
        return view('secpage');
    }
    public function thpage(){
        return view('thpage');
    }
    public function fourpage(){
        return view('fourpage');
    }
    public function fipage(){
        return view('fipage');
    }
}
