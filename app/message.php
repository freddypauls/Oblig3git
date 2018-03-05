<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $guarded = []; //Brukes i validation
	
	public function listing() {
		
		return $this->belongsTo(listing::class); //Sier at meldinger hører til en listing (isteden for foreign keys)
		
	}
	
	public function users() {
		
		return $this->belongsTo(User::class); //sier at meldinger hører til en bruker 
	}
	
}
