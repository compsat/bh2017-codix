<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Volunteers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('volunteers', function(Blueprint $table)
	    {
		    $table->increments('id');
		    $table->string('email');
		    $table->string('name');
		    $table->integer('event_id')->unsigned();
		    $table->foreign('event_id')
			    ->references('id')->on('events')
			    ->onDelete('cascade');
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
	    Schema::dropIfExists('volunteers');
    }
}
