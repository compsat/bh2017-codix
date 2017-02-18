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
			<div class = "panel-heading">
				<h4 class = "text-center"> <strong> Info </strong> </h3>
			</div>
			<div class = "panel-body">
				<h3>{{$event -> donations}} out of {{$event -> goal}} {{$event->type}} </h3>
				<h3><span class = "glyphicon glyphicon-map-marker"></span> {{$event -> location}} </h3>
				<h3>Posted by: {{$event->author}}</h3>
				<h3>Type: {{$event -> tag}}</h3>
				<h3>{{$event->description}}</h3>
			</div>
		</div>
	</div>
	<div class = "col-md-8">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				<h4 class = "text-center"> <strong> Updates </strong></h4>
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
					<h4 class = "text-center">No updates</h4>		
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
