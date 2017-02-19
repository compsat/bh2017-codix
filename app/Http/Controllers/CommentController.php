<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Request\CommentRequest;
use App\Comment;
use Redirect;

class CommentController extends Controller
{
	public function __construct()
	{
		$this->middleware("auth");
	}	
	public function create(Request $request, $id)
	{
		$data = $request->all();
		$user = Auth::user();

		Comment::create([
			'title' => $data['title'],
			'description' => $data['description'],
			'Event_id' => $id,
		]);
	}	
	public function index()
	{
		return DB::table('comments')->get();
	}
	
}
