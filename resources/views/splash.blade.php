@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="yolanda.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="colorRun.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="bloodDrive.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
