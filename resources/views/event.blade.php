@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "col-md-12">
	<div class = "jumbotron" style="background-color:transparent;">
		<h2 class = "text-center">{{ $event->title }} </h2>
	</div>
	</div>
	<div class = "col-md-4">
		<div class ="panel panel-default">
			<div class = "panel-heading">
				<h4 class = "text-center"> <strong> Info </strong> </h4>
			</div>
			<div class = "panel-body">
			<div class = "text-center">
			@if (Auth::user()->organization === '0')
				<input type="button" class="btn btn-success" value="Help out"/>
			@elseif (Auth::user()->username === $event->author)
				<input type="button" class="btn btn-success" value="Make an announcement"/>
			@endif
			</div>
				<h4><span class= "glyphicon glyphicon-flag"></span> {{$event -> donations}} out of {{$event -> goal}} {{$event->type}} </h4>
				<h4><span class ="glyphicon glyphicon-time"></span> Deadline {{$event->deadline}}</h4>
				<h4><span class = "glyphicon glyphicon-map-marker"></span> {{$event -> location}} </h4>
				<h4><span class = "glyphicon glyphicon-user"></span> {{$event->author}}</h4>
				<h4> <span class = "glyphicon glyphicon-unchecked"> </span> {{$event -> tag}}</h4>
				<pre class= "pre-scrollable">{{$event->description}}</pre>
			</div>
		</div>
	</div>
	<div class = "col-md-8">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				<h4 class = "text-center"> <strong> Announcements </strong></h4>
			</div>
			<div class = "panel-body">
				@if ($event->comments->count() > 0)
					@foreach ($event->comments as $comment)
					<div class = "media">
						<div class = "media-body">
						<div class = "media-heading"> <h3>{{ $comment->title }} <small><i>Posted on {{$comment -> created_at}} </i> </small> </h3> </div>
						<h4>{{ $comment->description}} </h4>
					@endforeach	
				@else
					<h4 class = "text-center">No announcements</h4>		
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
