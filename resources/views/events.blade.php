@extends('layouts.app')
@section('content')

<div class = "container">
	@foreach ($events as $event)
	<div class = "col-md-6">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				{{ $event->tag  }}	
			</div>
			<div class = "panel-body">
				
				<h4><strong><a href="/event/{{$event->id}}">{{ $event->title }}</a></strong></h4>
				<p><span class= "glyphicon glyphicon-map-marker"></span> {{ $event->location}} </p>
				<p> {{$event->donations}} out of {{$event->goal}} {{$event->type}}</p>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection
