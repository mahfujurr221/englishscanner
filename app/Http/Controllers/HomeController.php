<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // dd('dashboard');
        return view('backend.pages.dashboard');
    }

    public function front_index()
    {
        return view('frontend.layouts.master');
    }
}
