<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

use App\listing;

use App\User;

use Auth;


class ListingsController extends Controller
{
	
	public function index()
	{
		 $listings = listing::All();

		 return view('listings.index', compact('listings'));

	}
	 
	public function show(Listing $l)
	{
		$users = user::All();

	 return view('listings.show', compact('l', 'users'));

	}

	public function create()
	{
	
		$categories = category::All();

	 	return view('listings.create', compact('categories'));

	}

	public function store()
	{

	 $this->validate(request(), [

		 'title' => 'required|max:20',

		 'description' => 'required|max:255',

		 'category' => 'required'

	 ]);

	 $listing = new listing();

	 $listing->user_id = Auth::User()->id;

	 $listing->title = request('title');

	 $listing->description = request('description');

	 $listing->category_id = request('category');


	 $listing->save();


	 return redirect('/listings/create');

	}

	public function delete()
	{



	}
}