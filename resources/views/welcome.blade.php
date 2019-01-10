@extends('layouts.app')

@section('content')
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
     </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/images/carousel/iphone.png" alt="iPhone" width="1200" height="700">
        </div>
        <div class="item">
          <img src="/images/carousel/macbook.jpg" alt="Macbook" width="1200" height="700">
        </div>
        <div class="item">
          <img src="/images/carousel/iphone-gold.jpg" alt="iPhone " width="1200" height="700">
        </div>
       <div class="item">
          <img src="/images/carousel/watch.jpg" alt="Watch" width="1200" height="700">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <div class="container-fluid">
   <div class="row">
     <div class="col-sm-6 padding-0">
       <img class="img-responsive" src="/images/home/accessories.jpg">
     </div>
     <div class="col-sm-6 padding-0">
       <img class="img-responsive" src="/images/home/event.jpg">
     </div>
   </div>
   <div class="row">
     <div class="col-sm-6 padding-0">
       <img class="img-responsive" src="/images/home/watch.jpg">
     </div>
     <div class="col-md-6 padding-0">
       <img class="img-responsive" src="/images/home/ipad.jpg">
     </div>
   </div>
  </div>

  
@endsection
