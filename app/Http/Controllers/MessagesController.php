<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Henter inn modellene listing og message
use App\listing;

use App\message;

class MessagesController extends Controller
{	//function som henter fra siden med listing id som blir tatt imot og validerer info, for så og sende dette videre til function addMessage i App\listing modellen
    public function store(listing $l){
		 
		 $this->validate(request(), [
			
			'body' => 'required|min:2'
			
		]);
		 
		 $l->addMessage(request('body'));
		 
		 return back();
		 
	 }
}
