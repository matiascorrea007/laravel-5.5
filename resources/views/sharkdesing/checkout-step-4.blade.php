@extends('layouts.material')    
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')



<div class="ms-hero-page  ms-hero-bg-dark no-pb overflow-hidden ms-bg-fixed" style="background-image: url(layout/material/img/app-bg.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center color-white">

            <h1 class="animated bounceInDown animation-delay-6">Contactenos</h1>
            <p class="lead lead-lg animated bounceInDown animation-delay-7">Sharkestudio</p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>


 
<br>


  
  <div class="container mt-6">
        <div class="text-center mw-800 center-block mb-4">
          <h2 class="color-primary wow fadeInDown animation-delay-4" style="visibility: visible; animation-name: fadeInDown;">FELICITACIONES!!!</h2>
          <p class="lead wow fadeInDown animation-delay-4" style="visibility: visible; animation-name: fadeInDown;">Puedes ver todos los datos en tu cuenta de  <strong>SharkEstudio</strong>.</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <iframe src="<?php echo $preference['response']['init_point']; ?>" name="MP-Checkout" width="100%" height="800" frameborder="0"></iframe>
          </div>
          
          
      
        </div>
      </div>


@endsection