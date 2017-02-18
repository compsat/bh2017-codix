@extends('layouts.app')
@section('content')
<div id="myCarousel" class="carousel slide " data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img src="yolandaScaled.jpg" alt="Yolanda">
      <div class="carousel-caption">
        <h3>Aid Existing Relief Campaigns</h3>
        <p>Donate to the victims of Yolanda Right Now!</p>
        <p><a href="{{ url('/register') }}" class="btn btn-lg btn-primary">Sign up now!</a>
      </div>
    </div>
    <div class="item">
      <img src="coastCleanScaled.jpg" alt="Coast Cleaning">
      <div class="carousel-caption">
        <h3>International Coast Cleaning</h3>
        <p>Join efforts to create a cleaner environment!</p>
        <p><a href="{{ url('/register') }}" class="btn btn-lg btn-primary">Sign up now!</a>
      </div>
    </div>

    <div class="item">
      <img src="teachScaled.jpg" alt="Color Run">
      <div class="carousel-caption">
        <h3>Teach the Filipinos of Tomorrow!</h3>
        <p>Teach for the Philippines</p>
        <p><a href="{{ url('/register') }}" class="btn btn-lg btn-primary">Sign up now!</a>

      </div>
    </div>
    <div class="item">
      <img src="bloodDriveScaled.jpg" alt="Blood Drive">
      <div class="carousel-caption">
        <h3>Donate Blood for a Cause!</h3>
        <p>Find Beneficiaries right now</p>
        <p><a href="{{ url('/register') }}" class="btn btn-lg btn-primary">Sign up now!</a>
      </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container" style="padding-top: 1.5em">
  <h1 class="text-center">Team Codix</h1>
  <div class="row" style="padding-top: 1.5em">
    <div class="col-lg-4">
      <img class="img-circle">
      <h2 class="text-center">Gab Lopez</h2>
      <p class="text-center">DESCRIPTION</p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle">
      <h2 class="text-center">Aaron Ramos</h2>
      <p class="text-center">DESCRIPTION</p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle">
      <h2 class="text-center">Makki Villaluz</h2>
      <p class="text-center">DESCRIPTION</p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle">
      <h2 class="text-center">Sean Ryan Chan</h2>
      <p class="text-center">DESCRIPTION</p>
    </div>
  </div>
</div>
@endsection
