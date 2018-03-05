<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) { //Lager table messages i databasen om du kjører php artisan migrate via terminalen
			  
           $table->increments('id');
			  
			  $table->integer('listing_id');
			  
			  $table->integer('user_id');
			  
			  $table->string('body');
           
			  $table->timestamps();

		  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Dropper tablet om du sier det via terminalen
    {
        Schema::dropIfExists('messages');
    }
}
