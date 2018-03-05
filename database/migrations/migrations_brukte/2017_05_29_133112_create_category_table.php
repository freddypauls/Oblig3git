<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Lager et table med informasjonen som er hentet fra categories/create sin form og legger inn i de verdiene som er gitt
    {
        Schema::create('categories', function (Blueprint $table) {
			  
            $table->increments('id');
			  
			  	$table->string('category');
			  
			  	$table->string('description');
			  
            $table->timestamps();
			  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Om du vil fjerne en migrering så er det her den droppes (kode: php artisan migrate:refresh (eller restart, osv))
    {
        Schema::dropIfExists('categories');
    }
}
