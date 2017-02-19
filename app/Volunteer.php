<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
	protected $fillable = 
	[
		'email', 'name', 'event_id',
	];

	public function event()
	{
		return $this-belongsTo('App\Event');
	}

}
