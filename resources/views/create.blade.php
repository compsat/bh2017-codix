@extends('layouts.app')

@section('content')
<div class = "container">
<div class = "col-md-8 col-md-offset-2">
	<div class = "panel panel-default">
		<div class= "panel-heading">Create Event</div>
		<div class= "panel-body">
			<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
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
                            <label for="name" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control" name="description" value="{{ old('description') }}" required autofocus rows="9"> </textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>	
			<div class="form-group{{ $errors->has('goal') ? ' has-error' : '' }}">
                            <label for="goal" class="col-md-4 control-label">Goal</label>

                            <div class="col-md-4">
                                <input id="goal" type="text" class="form-control" name="goal" value="{{ old('goal') }}" required autofocus> 

                                @if ($errors->has('goal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goal') }}</strong>
                                    </span>
                                @endif
			    </div>
				<div class="col-md-2">
					<select name = "type" id='type' class="form-control">
						<option value="Volunteer/s" selected>Volunteer/s</option>
						<option value="Liter/s">Liter/s</option>
						<option value="Php">Php</option>
					</select>
				</div>
			</div>
			<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
			</div>
			<div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">
                            <label for="tag" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
				<select name = "tag" id='tag' class="form-control">
						<option value="Service" selected>Service</option>
						<option value="Supplies">Supplies</option>
						<option value="Donation">Donation</option>
				</select>

                                @if ($errors->has('tag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tag') }}</strong>
                                    </span>
                                @endif
                            </div>
			</div>
			<div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
                            <label for="deadline" class="col-md-4 control-label">Deadline</label>

                            <div class="col-md-6">
                                <input id="deadline" type="text" class="form-control" name="deadline" value="{{ old('deadline') }}" required autofocus>

                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>
			</div>
			<div class = "form-group">
				<div class ="col-md-6 col-md-offset-4">
					<input type="file" name="picture"></input>
				</div>
			</div>
			{{ csrf_field() }}
			<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
				Submit
                                </button>
                            </div>

			</form>
		</div>
	</div>
</div>
</div>
@endsection
