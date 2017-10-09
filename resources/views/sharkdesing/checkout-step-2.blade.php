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

<div class="top-content">
            <div class="container">
                

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
            {!!Form::open(['url'=>'checkout-step-3', 'method'=>'POST' , 'files'=>True , 'class'=>'f1'])!!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                            <h3>Seleccione un metodo de pago </h3>
                            <p></p>
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="2" style="width: 49.99333333333334%;"></div>
                                </div>
                                <div class="f1-step activated">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Ingresar</p>
                                </div>

                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-paypal"></i></div>
                                    <p>Pago</p>
                                </div>
                                
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                                    <p>Confirmar</p>
                                </div>
                            </div>
                            

            
                 <div class="paymentCont">
                    <div class="paymentWrap">
                        <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                               
                            <label class="btn paymentMethod">
                                <img src="storage/paginas/checkout/mercadopago.png"  class="method" alt="">
                                    <input type="radio" name="tipopago" value="mercadopago" checked> 
                            </label>

                             
                            </div>        
                        </div>

                        <br><br>
                        <div class="footerNavWrap clearfix">
                        <button type="submit" class="btn btn-primary pull-right btn-fyi">Continuar<span class="glyphicon glyphicon-chevron-right"></span></button>
                            
                        </div>
                        
                    </div>
        


                              
             
                        
                         {!!Form::close()!!}
                    </div>
                </div>
                    
            </div>
        </div>



@endsection