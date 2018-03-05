<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) { //Legger informasjonen om du bruker koden php artisan migrate i terminalen
			  
            $table->increments('id');
			  
			  	$table->integer('user_id')->unsigned();
			  
			  	$table->string('title');
			  
			  	$table->string('description');
			  
			  	$table->integer('category_id')->unsigned();
			  
            $table->timestamps();
			  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Dropper table om du sier det i terminalen
    {
        Schema::dropIfExists('listings');
    }
}