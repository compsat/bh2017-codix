@extends('layouts.app')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="yolanda.jpg" alt="Yolanda">
      <div class="carousel-caption">
        <h3>Aid Existing Relief Campaigns</h3>
        <p>Donate to the victims of Yolanda Right Now!</p>
      </div>
    </div>
    <div class="item">
      <img src="coastClean.jpg" alt="Coast Cleaning">
      <div class="carousel-caption">
        <h3>...</h3>
        <p>...</p>
      </div>
    </div>

    <div class="item">
      <img src="colorRun.jpg" alt="Color Run">
      <div class="carousel-caption">
        <h3>...</h3>
        <p>...</p>
      </div>
    </div>

    <div class="item">
      <img src="bloodDrive.jpg" alt="Blood Drive">
      <div class="carousel-caption">
        <h3>...</h3>
        <p>...</p>
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

<div class="row" style="padding-top: 1.5em">
  <div class="col-md-6 col-md-1">
    <div class="thumbnail">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <h1 class="text-center">Thumbnail label</h1>
        <p>DESCRIPTION</p>
      </div>
    </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <h1 class="text-center">Thumbnail label</h1>
        <p>DESCRIPTION</p>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <h1 class="text-center">Thumbnail label</h1>
        <p>DESCRIPTION</p>
    </div>
  </div>
  </div>
@endsection
