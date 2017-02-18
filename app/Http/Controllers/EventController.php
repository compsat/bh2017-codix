<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Request\EventRequest;
use App\Event;
use Redirect;

class EventController extends Controller
{
	public function show()
	{
		$events = DB::table('events')->latest()->paginate(4);
		return view('events', ['events' => $events]);
	}
	
	public function create(Request $request)
	{
		$data = $request->all();
		$org = Auth::user();

		Event::create([
			'title' => $data['title'],
			'description' => $data['description'],
			'type' => $data['type'],
			'goal' => $data['goal'],
			'date' => $data['date'],
			'location' => $data['location'],
			'author' => $user['Name'],
		]);
		return Redirect::to('/home');
	}	
}
