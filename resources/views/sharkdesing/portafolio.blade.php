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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/portafolio/comparison_13.jpg" alt="">
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

            <h1 class="animated bounceInDown animation-delay-6">Nuestro Portafolio</h1>
            <p class="lead lead-lg animated bounceInDown animation-delay-7">Sharkestudio</p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>
  
  <br><br>

<div class="container">
        <div class="row">
          <div class="col-md-3 hidden-sm hidden-xs">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-filter-list"></i>Filter List</h3>
              </div>
              <div class="card-block no-pb">
                <form class="form-horizontal">
                  <h4 class="no-m color-primary">Categories</h4>
                  <div class="form-group mt-1">
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios0" value="option0" checked="" class="filter active" data-filter="all"><span class="circle"></span><span class="check"></span> All </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" class="filter" data-filter=".lineage2"><span class="circle"></span><span class="check"></span> Lineage 2 </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" class="filter" data-filter=".shop"><span class="circle"></span><span class="check"></span> Shop </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" class="filter" data-filter=".software"><span class="circle"></span><span class="check"></span> Software </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" class="filter" data-filter=".app"><span class="circle"></span><span class="check"></span> App </label>
                    </div>
                    <div class="radio no-mb">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5" class="filter" data-filter=".blog"><span class="circle"></span><span class="check"></span> Blog </label>
                    </div>
                  </div>
                </form>
                <h4 class="mt-2 color-primary no-mb">Columnas</h4>
              </div>


              <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-4" role="tablist">
                <li>
                  <a id="Cols1" class="withoutripple" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">1</a>
                </li>
                <li>
                  <a id="Cols2" class="withoutripple" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab">2
                  </a>
                </li>
                <li class="active">
                  <a id="Cols3" class="withoutripple" href="#messages7" aria-controls="messages7" role="tab" data-toggle="tab">3</a>
                </li>
                <li>
                  <a id="Cols4" class="withoutripple" href="#settings7" aria-controls="settings7" role="tab" data-toggle="tab">4</a>
                </li>
              <span id="i2" class="ms-tabs-indicator" style="left: 106.25px; width: 53.125px;"></span></ul>
              <div class="card-block">
                <form class="form-horizontal">
                  <div class="form-group no-mt">
                    <div class="col-md-12">
                      <h4 class="no-m color-primary mb-2">Descripcion</h4>
                      <div class="togglebutton">
                        <label>
                          <input id="port-show" type="checkbox"></span> Ver Descripcion </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>


          <div class="col-md-9">
            <div class="row" id="Container">



           @foreach($portafolios as $portafolio)
            <div class="col-md-4 col-sm-6 mix lineage2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="{{$portafolio->imagen}}" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">{{$portafolio->nombre}}</h4>
                      <a href="{{ url('portafolio-theme-'.$portafolio->id) }}" class="btn btn-raised btn-white color-info wow flipInX animation-delay-8">
                        <i class="zmdi zmdi-eye">Ver</i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            @endforeach

            
              <!-- item -->
            </div>
          </div>
        </div>
      </div>

        
       



@endsection