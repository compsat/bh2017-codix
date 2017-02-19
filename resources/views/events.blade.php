@extends('layouts.app')
@section('content')

<!--<div class = "container">
@foreach ($events as $event)
<div class = "col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    {{ $event->tag  }}
    <h2 class="panel-title">{{ $event->title }}</h2><img src="teachLogo.png" class="icon">
  </div>
  <div class="panel-body">
    <h3>NAME OF ORGANIZATION</h3><img src="teachScaled.jpg" class="right" style="width: 15%; height: 15%">
    <p>DATE</p>
    <span class="glyphicon glyphicon-map-marker"><p>{{ $event->location}}</p></span>
    <p>description</p>
    <h4>Progress Tracker</h4>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        <span class="sr-only">{{$event->donations}}</span>  out of {{$event->goal}} {{$event->type}}
      </div>
    </div>
    <a href="LINK TO IMAGE EVENT"><button type="button" class="btn btn-default">Pledge Now!</button></a>
  </div>
</div>
@endforeach
<div class="panel panel-default col-md-4">
  <div class="panel-heading">
    <h2 class="panel-title">EVENT NAME</h2><img src="GKLogo.jpg" class="icon">
  </div>
  <div class="panel-body">
    <h3>NAME OF ORGANIZATION</h3><img src="newsVolunteer.jpg" class="right" style="width: 15%; height: 15%">
    <p>DATE</p>
    <span class="glyphicon glyphicon-map-marker"><p>LOCATION</p></span>
    <p>description</p>
    <h4>Progress Tracker</h4>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        30 Volunteers have pledged!
      </div>
        70 More Volunteers needed!
    </div>
    <a href="LINK TO EVENT PAGE"><button type="button" class="btn btn-default">Pledge Now!</button></a>
  </div>
</div> 
</div>-->

</div>
<div class = "container">
	@foreach ($events as $event)
	<div class = "col-md-4">
		<div class = "panel panel-default">
			<div class = "panel-heading" style="color:white;">
				{{ $event->tag  }} 
			</div>
			<div class = "panel-body">
				<img src="picture.jpg"/>
				<h4><strong><a href="/event/{{$event->id}}">{{ $event->title }}</a></strong></h4>
				<p><span class= "glyphicon glyphicon-user"></span> {{$event->author}}</p>
				<p><span class= "glyphicon glyphicon-map-marker"></span> {{ $event->location}} </p>
				<p><span class= "glyphicon glyphicon-flag"></span> {{$event->donations}} out of {{$event->goal}} {{$event->type}}</p>
				<p><span class = "glyphicon glyphicon-time"></span> Deadline {{$event->deadline}}</p>
				@if (Auth::user()->organization === '0')
				<a href="event/{{$event->id}}">See more</a>
				@endif
			</div>
		</div>
	</div>
	@endforeach
</div>

{{$events->links()}}
@endsection
