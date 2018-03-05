<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

use App\listing;

use App\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Henter alle kategorier, listings og brukere og sender til siden (viewen) home (home.blade.php)
    {
		  $categories = category::All();
		  $listings = listing::All();
		  $users = user::all();
		 
        return view('home', compact('categories', 'listings', 'users'));
    }
	
}
