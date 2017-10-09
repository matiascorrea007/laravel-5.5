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

                                <div class="f1-step activated">
                                    <div class="f1-step-icon"><i class="fa fa-paypal"></i></div>
                                    <p>Pago</p>
                                </div>
                                
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                                    <p>Confirmar</p>
                                </div>
                            </div>
                            
                         {!!Form::close()!!}
                    </div>
                </div>
                    
            </div>
        </div>



        <div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
    <div class="row">



<div class="container outer-section">
        <div id="print-area">

            
            <hr />
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    Este es un recibo electrónico, para cualquier problema por favor, póngase en contacto con &nbsp;<strong>
               
                    </strong>

                </div>
            </div>
            <hr />


<div class="panel panel-primary ">
        <div class="panel-heading ">
            <h3 class="panel-title">Descripcion y Codigo</h3>
        </div>  
  <div class="panel-body">
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Detalles de Facturacion:</h2>
                    <h4><strong>Fecha de Facturacion : </strong> </h4>
                    

                    <h4><strong>Nombre :</strong>{{ $user->nombre }} {{$user->apellido }}</h4>
                    <h4><strong>Direccion: </strong> {{ $user->direccion }}</h4>
                    <h4><strong>CP: </strong> {{ $user->cp }}</h4>
                    <h4><strong>Provincia: </strong> {{ $user->provincia }}</h4>
                    <h4><strong>Ciudad: </strong> {{ $user->ciudad }}</h4>
                    <h4><strong>Telefono :</strong> {{ $user->telefono }}</h4>
                    <h4><strong>Email: </strong>{{ $user->email }}</h4>
                    
</div>


 <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>Detalles Del Pago :</h2>
                    <h4><strong>Factura Numero: </strong>#10009</h4>
                    <h4><strong>Tipo de Pago: </strong> MercadoPago</h4>
                   
</div>



</div>
</div>
</div>




            
            <hr />
            <br />
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)                
                                <tr>
                <td><img src="{{$cart->imagen1}}"  class="user-image center-block" alt="" height="100" width="100"></td>
                        <td>{{ $cart->descripcion }}</td>
                        <td>{{ $cart->quantity }}</td>
                        <td>${{ number_format($cart->precioventa,2) }}</td>
                        <td>${{ number_format($cart->precioventa * $cart->quantity,2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <h1><div class="green col-lg-9 col-md-9 col-sm-9" style="text-align: right; padding-right: 30px;">
                    IMPORTE TOTAL :
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <strong><i class="fa fa-money" style="color:green" aria-hidden="true"></i> $ {{ $total }}</strong>
                </div></h1>
                <hr />
            </div>

            <hr />
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <strong>INSTRUCCIONES IMPORTANTES:
                    </strong>
                <h5># Este es un recibo electrónico por lo que no requiere ninguna firma.</h5>
                <h5># Se puede ponerse en contacto con nosotros entre las 8:00-12:00 am a 16:00-20:00 pm todos los días laborables .</h5>
                </div>
            </div>

        </div>
        <hr />

        {!!Form::open(['url'=>'checkout-step-4', 'method'=>'MATCH', 'files'=>True])!!}
                <input type="hidden" name="tipopago" value="{{ $tipopago }}">
        

            <div class="panel-footer">
                      <a href="{{ url('/') }}" class="btn btn-raised btn-danger pull-left" ><i class=""> Cancelar</i></a>              
                      {!!Form::submit('Confirmar',['class'=>'btn btn-raised btn-success pull-right'])!!}
             </div>

        {!!Form::close()!!}


    </div>



        <br><br><br><br><br><br>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->


@endsection