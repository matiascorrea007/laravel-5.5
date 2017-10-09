@extends('layouts.material')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')
    


 <div class="intro-section intro-comparison intro-light" data-jarallax="{&quot;type&quot;:&quot;scroll&quot;,&quot;speed&quot;:0.4,&quot;imgWidth&quot;:1920,&quot;imgHeight&quot;:1200,&quot;noAndroid&quot;:&quot;true&quot;,&quot;noIos&quot;:&quot;true&quot;}" style="background-image: url(layout/material/img/app-bg.jpg);"><span class="overlay" style="background-color: #000000; opacity: 0.6;"></span>
          <div class="container text-center">
            <h1 class="intro-title text-huge">SharkEstudio</h1>
            <div class="intro-description">
              <p>Donde tus ideas se hacen realidad.</p>
            </div>
            <div class="intro-buttons"><a class="btn btn-solid btn-pill btn-primary btn-nl waves-effect waves-light" href="#">Comenzar</a></div>
            <div class="compar-slider-wrap">
              <div class="cs-label">Back-end</div>
              <div class="cs-label">Front-end</div>
              <div class="compar-slider"><img class="macbook" src="layout/material/img/macbook.png" alt="MacBook">
                <div class="cs-screen">
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/comparison_05.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>

        
<div class="ms-hero-page  ms-hero-bg-dark no-pb overflow-hidden ms-bg-fixed" style="background-image: url(layout/material/img/app-bg.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center color-white">

            <h1 class="animated bounceInDown animation-delay-6">Portafolios</h1>
            <p class="lead lead-lg animated bounceInDown animation-delay-7">Theme</p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>

      <br>


<div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="">
                <div id="carousel-example-generic" class="ms-carousel carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <img src="{{$portafolio->imagen}}" alt="...">
                      <div class="carousel-caption">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  @foreach($images as $imagen)
                    <div class="item">
                      <img src="{{$imagen->url}}" alt="...">
                      <div class="carousel-caption">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                     @endforeach
                  </div>
                  <!-- Controls -->
                  <a href="#carousel-example-generic" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control" role="button" data-slide="prev">
                    <i class="zmdi zmdi-chevron-left"></i>
                  </a>
                  <a href="#carousel-example-generic" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control" role="button" data-slide="next">
                    <i class="zmdi zmdi-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Item Info</h2>
              </div>
              <div class="card-block">
                <h3 class="color-primary no-mt">Data</h3>
                <ul class="list-unstyled">
                  <li>
                    <strong>Title:</strong> the title item</li>
                  <li>
                    <strong>Categories:</strong> Nature, Landscape, animals.</li>
                  <li>
                    <strong>Author:</strong> Andrew Ryan</li>
                  <li>
                    <strong>Year:</strong> {{$portafolio->created_at}}</li>
                </ul>
                <h3 class="color-primary">Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur quas adipisicing elit. Voluptatem vitae similique illum quia ipsa a temporibus ratione libero aliquam debitis temporibus.</p>
                <p>Lorem ipsum similique illum quia ipsa elit consectetur.</p>
                <p class="text-center">
                  <a href="{{$portafolio->demo}}" class="btn btn-raised btn-primary">
                    <i class="fa fa-desktop"></i> Live Preview</a>
                </p>
              </div>
            </div>
          </div>
        </div>
</div>






@section('carrucel-portafolios')
<script>
  $('.bxslider').bxSlider({
  minSlides: 5,
  maxSlides: 5,
  slideWidth: 360,
  slideMargin: 10
  });
</script>
@stop


<div class="container ">
<div class="row">
<h2 class="right-line mt-6">Proyecto Relacionados</h2>
<ul class="bxslider">

@foreach($portafoliosAlls as $portafoliosAll)
  <li><a href="{{ url('portafolio-theme-'.$portafoliosAll->id) }}"><img src="{{$portafoliosAll->imagen}}" /></a></li>
 @endforeach
</ul>
</div>
</div>


@endsection