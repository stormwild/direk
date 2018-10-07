<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function movies()
    {
        return view('movies');
    }

    public function upcoming()
    {
        return view('upcoming');
    }

    public function people()
    {
        return view('people');
    }
}
