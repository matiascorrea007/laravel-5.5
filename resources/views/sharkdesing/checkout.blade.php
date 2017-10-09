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

<div class="container">
 @if(count($cart))

        <h1 class="right-line mb-4">Cart</h1>
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-1">
              <table class="table table-responsive table-no-border vertical-center" id="datos">
                <tbody>
                 @foreach($cart as $item)
                 <tr>
                  <td class="hidden-xs">
                    <img src="assets\img\demo\products\m1.png" alt=""> </td>
                  <td>
                    <h4 class="">{{ $item->descripcion }}</h4>
                  </td>
                  <td>
                    <div class="form-inline input-number">
                      <div class="form-group"><input type="text" class="form-control form-control-number" pattern="[0-9]*" value="1"></div> </div>
                  </td>
                  <td>
                    <span class="color-success">${{ number_format($item->precioventa,2) }}</span>
                  </td>
                  <td>
                  <input 
                    type="number"
                    min="1"
                    max="100"
                    value="{{ $item->quantity }}"
                    id="product_{{ $item->id }}"
                  >
                  <a 
                    href="#" 
                    class="btn btn-warning"
                    data-href="{!! URL::to('web-update/'.$item->id) !!}"
                    data-id = "{{ $item->id }}"
                    onclick="ActualizarItem({{$item->id}});"
                  >
                    <i class="fa fa-refresh"></i>
                  </a>
                </td>
                <td><span id="subtotal"></span>${{ number_format($item->precioventa * $item->quantity,2) }}</td>
                  <td class="hidden-xs">

                    <button onclick="DeleteItem({{$item->id}});" class="btn btn-danger" type="button">
                      <i class="zmdi zmdi-delete"></i> Delete</button>
                  </td>
                </tr>

                @endforeach
              </tbody>
              </table>
            </div>
          
           @else
        <h3><span class="label label-warning">No hay productos Seleccionados :</span></h3>
      @endif
      
            
            
            
          </div>
          <div class="col-md-3">
            <div class="card card-success">
              <div class="card-header">
                <i class="fa fa-list-alt" aria-hidden="true"></i> Summary</div>
              <div class="card-block">
                <ul class="list-unstyled">
                  <li>
                    <strong>Price: </strong> $1984.26</li>
                  <li>
                    <strong>Tax: </strong> $47.22</li>
                  <li>
                    <strong>Tax: </strong> $47.22</li>
                  <li>
                    <strong>Shipping costs: </strong>
                    <span class="color-warning">$5.25</span>
                  </li>
                </ul>
                <h3>
                  <strong>Total:</strong>
                  <span class="color-success">$2456.45</span>
                </h3>

                  <a href="{!! URL::to('checkout') !!}" class="btn btn-raised btn-success btn-block btn-raised mt-2 no-mb">
                  <i class="zmdi zmdi-shopping-cart-plus"></i> Comprar</a>

                  <a href="{!! URL::to('web-trash') !!}" class="btn btn-raised btn-danger btn-block btn-raised mt-2 no-mb">
                  <i class="fa fa-trash"></i>  Vaciar Carrito</a>


              </div>
            </div>
          </div>

          


        </div>
      </div>


@endsection