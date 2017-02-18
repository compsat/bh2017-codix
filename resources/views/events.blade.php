@extends('layouts.app')
@section('content')

<div class="panel panel-default col-md-4">
  <div class="panel-heading">
    <h2 class="panel-title">EVENT NAME</h2><img src="teachLogo.jpg" class="icon">
  </div>
  <div class="panel-body">
    <h3>NAME OF ORGANIZATION</h3>
    <p>DATE</p>
    <span class="glyphicon glyphicon-map-marker"><p>LOCATION</p></span>
    <p>description</p>
    <h4>Progress Tracker</h4>
    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        <span class="sr-only">20% Complete</span>
      </div>
    </div>
    <a href="LINK TO IMAGE EVENT"><button type="button" class="btn btn-default">Pledge Now!</button></a>
  </div>
</div>
<div class="panel panel-default col-md-4">
  <div class="panel-heading">
    <h2 class="panel-title">EVENT NAME</h2><img src="GKLogo.jpg" class="icon">
  </div>
  <div class="panel-body">
    <h3>NAME OF ORGANIZATION</h3>
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
@endsection
