<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Volunteer;
class VolunteerController extends Controller
{
	public function show()
	{
		$volunteers = Event::find($id);
		return view('volunteer', ['volunteers', $volunteers]);
	}	
	public function create(Request $request, $id)
	{
		$user = Auth::user();
		Volunteer::create([
			'email' => $user['email'],
			'name' => $user['name'],
			'event_id'=> $id,
		]);
		return Redirect::to('/home');
	}	
}
