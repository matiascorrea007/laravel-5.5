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



        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                         
                          

                            <h3>Pasos para la Confirmacion </h3>
                            <p>estas a poco click de realizar la compra</p>
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                                </div>
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Ingresar</p>
                                </div>

                                <div class="f1-step ">
                                    <div class="f1-step-icon"><i class="fa fa-paypal"></i></div>
                                    <p>Pago</p>
                                </div>
                                
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                                    <p>Confirmar</p>
                                </div>
                            </div>
                            
  
                     
                            <fieldset>
                        {!!Form::open(['url'=>'login', 'method'=>'POST' , 'files'=>True , 'class'=>'f1'])!!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                            <br>
                                <h4>Login :</h4>
               

                                <div class="form-group">
                                    <label class="sr-only" for="f1-first-name">Ingrese el Email</label>
                                    <input type="text" name="email" placeholder="Ingrese el Email..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Ingrese el Password</label>
                                    <input type="password" name="password" placeholder="Ingrese el Password..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                             
                                <div class="f1-buttons">
                                    <button type="submit" class="btn btn-next">Next</button>
                                </div>
                           {!!Form::close()!!}
                            </fieldset>

                             
                        
                       
                    </div>
                </div>
                    
            </div>
        </div>


@endsection