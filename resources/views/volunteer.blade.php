@extends("layouts.app")

@section('content')
<div class = "container">
	<div class = "text-center">
		<ul>
			@foreach($volunteers as $volunteer)
				<li> {{$volunteer->name}} {{$volunteer->email}}</li>
			@endforeach
		</ul>
	</div>
</div>
@endsection
