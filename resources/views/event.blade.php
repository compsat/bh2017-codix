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
				<form class = "form-horizontal" role="form" method="POST" action="confirm_create/{{$event->id}}">
					{{ csrf_field() }}
					<input type="submit" class="btn btn-success" value="Help out"/>
				</form>
			@elseif (Auth::user()->organization === '1')
				<a href="/volunteers/{{$event->id}}">Show volunteers</a>
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
	@if (Auth::user()->username === $event->author)
	<div class = "col-md-8">
		<div class = "panel panel-default">
		<div class = "panel-heading">Make announcement</div>
		<form class="form-horizontal" role="form" method="POST">
			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
			</div>
			<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control" name="description" value="{{ old('description') }}" required autofocus rows="9"> </textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
			</div>	
		{{ csrf_field() }}
		<div class = "form-group">
		<div class = "text-center">
			<input type="submit" class= "btn btn-success" value="Make an announcement"/>
		</div>
		</div>
		</div>
	</div>
	</div>
	{{ csrf_field()}}
		</form>
	@endif
		<div class = "container">
		@if (Auth::user()->username === $event->author)
			<div class = "col-md-12">
		@else	
			<div class = "col-md-8">
		@endif
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
</div>
@endsection
