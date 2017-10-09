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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/home/comparison_21.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>


  


    @include('sharkdesing.paginas.home.nuestros-servicios')

    @include('sharkdesing.paginas.home.algunos-datos')

    @include('sharkdesing.paginas.home.carrucel')

    @include('sharkdesing.paginas.home.tecnologias')



<br><br>

		
		@include('sharkdesing.paginas.home.testimonios')

      <br><br>

    

   @include('sharkdesing.paginas.home.portafolio')

  

  @include('sharkdesing.paginas.home.blog')




@endsection