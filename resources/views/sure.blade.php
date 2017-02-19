@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "jumbotron">
		<div class = "text-center">
			<h2> Are you sure? </h2>
		</div>
		<form class = "form-horizontal " role="form" method="POST">
			<div class="container">
				{{ csrf_field() }}
				<div class = "col-md-6">
					<input type="submit" value="Yes">
				</div>
				<div class = "col-md-6">
					<input type="button" value="Cancel">
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
