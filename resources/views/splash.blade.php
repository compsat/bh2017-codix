@extends('layouts.app')
@section('content')
<div class="container" style="padding: 0 0 20px 0; margin: 0px !important; width: 100%">
<div id="myCarousel" class="carousel slide " data-ride="carousel">
  <div class="col-md-12">
    <div class="main-text col-md-12 text-center" style="z-index: 100; padding-top: 100px">
      <h1>Avad INSERT LOGO HERE</h1>
      <a href="{{url ('/register')}}" type="button" class="btn btn-clear btn-lg">Sign Up</a>
    </div>
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
      <img src="yolandaScaledDark.jpg" alt="Yolanda">
      <div class="carousel-caption">
        <h3>Aid Existing Relief Campaigns</h3>
        <p>Donate to the victims of Yolanda Right Now!</p>
      </div>
    </div>
    <div class="item">
      <img src="coastCleanScaledDark.jpg" alt="Coast Cleaning">
      <div class="carousel-caption">
        <h3>International Coast Cleaning</h3>
        <p>Join efforts to create a cleaner environment!</p>
      </div>
    </div>

    <div class="item">
      <img src="teachScaledDark.jpg" alt="Color Run">
      <div class="carousel-caption">
        <h3>Teach the Filipinos of Tomorrow!</h3>
        <p>Teach for the Philippines</p>

      </div>
    </div>
    <div class="item">
      <img src="GK1Dark.jpg" alt="Gawad Kalinga">
      <div class="carousel-caption">
        <h3>Help Build a Better Community!</h3>
        <p>Gawad Kalinga</p>
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
</div>
</div>

<div class="container-fluid">
  <h1 class="text-center">Team Codix</h1>
  <div class="row" style="padding-top: 1.5em">
    <div class="col-lg-6">
      <img class="img-circle">
      <h2 class="text-center">Gab Lopez</h2>
      <p class="text-center">DESCRIPTION</p>
    </div>
    <div class="col-lg-6">
      <img class="img-circle">
      <h2 class="text-center">Aaron Ramos</h2>
      <p class="text-center">DESCRIPTION</p>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <img class="img-circle">
        <h2 class="text-center">Makki Villaluz</h2>
        <p class="text-center">DESCRIPTION</p>
      </div>
      <div class="col-lg-6">
        <img class="img-circle">
        <h2 class="text-center">Sean Ryan Chan</h2>
        <p class="text-center">DESCRIPTION</p>
      </div>
    </div>
  </div>
</div>
@endsection
