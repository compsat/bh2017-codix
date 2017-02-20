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
	public function __construct()
	{
		$this->middleware("auth");
	}	
	public function index()
	{
		$events = DB::table('events')->latest()->paginate(6);
		return view('events', ['events' => $events]);
	}
	
	public function create(Request $request)
	{
		$data = $request->all();
		$user = Auth::user();
		Event::create([
			'title' => $data['title'],
			'description' => $data['description'],
			'type' => $data['type'],
			'goal' => $data['goal'],
			'location' => $data['location'],
			'author' => $user['name'],
			'tag' => $data['tag'],
			'deadline' => $data['deadline'],
		]);
		return Redirect::to('/home');
	}	

	public function show(Request $request , $id)
	{
		$event = Event::find($id);
		return view("event", ['event' => $event]);
	}	

	public function showCreate()
	{
		return view("create");
	}	
}
