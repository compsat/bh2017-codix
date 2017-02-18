@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "col-md-12">
	<div class = "jumbotron">
		<h2 class = "text-center">{{ $event->title }} </h2>
	</div>
	</div>
	<div class = "col-md-4">
		<div class ="panel panel-default">
			<div class = "panel-body">
				<h3>{{$event -> donations}} {{$event->type}} of goal of {{$event -> goal}} {{$event->type}} </h3>
				<h3>Location: {{$event -> location}} </h3>
				<h3>Posted by: {{$event->author}}</h3>
				<h3>Type: {{$event -> tag}}</h3>
				<h3>{{$event->description}}</h3>
			</div>
		</div>
	</div>
	<div class = "col-md-8">
		<div class = "panel panel-default">
			@foreach ($event->comments as $comment)	
				{{ $comment->title }}
				{{ $comment->description }}
			@endforeach
		</div>
	</div>
</div>
@endsection
