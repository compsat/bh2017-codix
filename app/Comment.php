<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable =
	[
		'description', 'title', 'Event_id',
	];
	
	public function event()
	{
		return $this->belongsTo('App\Event');
	}	
}
