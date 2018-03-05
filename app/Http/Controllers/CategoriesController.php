<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Henter inn modellene listing og category
use App\listing;

use App\category;

class CategoriesController extends Controller
{
    //Function som sender alt fra category og listing til welcome view
	public function index()
	{
		
		$categories = category::All();
		$listings = listing::latest()->get();
	
		return view('welcome', compact('categories', 'listings'));
		
	}
	//Function henter inn $c som er i urln, henter også inn alt fra listing og sender alt dette til /categories/show i view folderen
	public function show(Category $c)
	{
		$listings = listing::All();
		
    	return view('categories.show', compact('c', 'listings'));
		
	}
	//gjør klar til å hente form til store funksjon
	public function create()
	{
		
		return view('categories.create');
		
	}
	//henter inn fra form og legger det i databasen
	public function store()
	{
		$this->validate(request(), [ //Validerer inputet, sender til layouts.error (innelaget i laravel)
			
			'category' => 'required|max:15',
			
			'description' => 'required|max:50'
			
		]);
		
		category::create(request(['category', 'description']));
		
		
		return redirect('/categories/create');
	}
}
