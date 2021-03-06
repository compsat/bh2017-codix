<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('events', function (Blueprint $table)
	{    
	    $table->increments('id') ;
	    $table->string('title');
	    $table->longText('description');
	    $table->integer('donations')->default(0);
	    $table->string('type');
	    $table->integer('goal');
	    $table->string('author');
	    $table->string('location');
	    $table->string('tag');
	    $table->string('deadline');
	    $table->timestamps();
	});	    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::dropIfExists('events');
    }
}
