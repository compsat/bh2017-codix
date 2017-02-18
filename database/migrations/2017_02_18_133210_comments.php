<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('comments', function(Blueprint $table)
	{
		$table->increments('id');
		$table->integer('Event_id')->unsigned();
		$table->foreign('Event_id')
			->references('id')->on('events')
			->onDelete('cascade');
		$table->longText('description');
	});
		$table->string('title');
		$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::dropIfExists('comments');
    }
}
