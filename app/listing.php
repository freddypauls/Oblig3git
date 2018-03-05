<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class listing extends Model
{
    protected $guarded = [];
	
	public function messages()
	 {
		 
		 return $this->hasMany(message::class); //Sier at en listing kan ha mange meldinger
		 
	 }
	
	public function users()
	{
		
		return $this->belongsTo(User::class); //Sier at listings hører til en bruker
		
	}
	
	public function addMessage($body) {
		
		$user = Auth::User()->id; //Henter bruker id til brukeren som skal lage medlingen
		
		
		
		message::create([ //Henter en melding og skriver det inn i databasen (dette funker fordi vi har connected listing og message modellene)
			
			'body' => $body,
			
			'listing_id' => $this->id,
			
			'user_id' => $user
			
		]);
	}
}
