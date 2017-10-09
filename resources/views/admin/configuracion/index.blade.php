@extends('layouts.metronic')
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
@include('flash::message')




<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cogs font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configuracion Box Facebooksd</span>

    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      
           @if(empty(DB::table('facebooks')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-facebook" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>link</th>

    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @if(!empty($boxs))
    @foreach($boxs as $box)
    <tbody>
  <td>{{ $box -> id}}</td>
  <td>{!! $box -> box !!}</td>


  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $box->id }}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $box->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif
</td>

  </tbody>
  @endforeach
  @endif
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

@if(!empty($boxs))
<!--modal editar user-->
 @include('admin.configuracion.facebook.modal.modal-edit-boxfacebook')
<!--modal eliminar usuario-->
 @include('admin.configuracion.facebook.modal.modal-delete-boxfacebook')
 @endif
<!--modal crear usuario-->
 @include('admin.configuracion.facebook.modal.modal-crear-boxfacebook')












<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cogs font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar Logo</span>


    <div><br>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >


    @if(empty(DB::table('logos')->get()))
              <a class="btn btn-success" data-toggle="modal" data-target="#crear-logo" >
              <i class="fa  fa-plus fa-lg"></i></a>
            @endif
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Logo</th>
    <th>Imagen</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($logos as $logo)
    <tbody>
  <td>{{ $logo -> id}}</td>
  <td>{{ $logo -> logo}}</td>
  <td><i class="icon fa fa-fw"><img src="storage/paginas/home/logo/{{$logo->logo}}"  width="40" height="40"></i></td> 

  
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Editlogo-{{$logo->id}}"><i class="fa fa-edit"> Editar</i></button>
<!--esto es para que solo el administrador pueda eliminar-->

<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-logo-{{ $logo->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>

</td>

  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--modal editar user-->
 @include('admin.configuracion.logo.modal.modal-edit-logo')
<!--modal eliminar usuario-->
 @include('admin.configuracion.logo.modal.modal-delete-logo')
 <!--modal crear usuario-->
 @include('admin.configuracion.logo.modal.modal-crear-logo')









<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cogs font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar ReCaptcha</span>


    <div><br>
    <p>Para obtener las private_key y public_key ingresar a <a href="https://www.google.com/recaptcha/admin#list">Recaptcha</a></p>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >


    
             
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
          
           @if(!empty($recaptcha))

    {!!Form::model($recaptcha,['url'=>['recaptcha-update',$recaptcha->id],'method'=>'PUT' , 'files'=>True])!!}
      @include('admin.configuracion.recaptcha.forms.captcha')
    {!!Form::close()!!}

        @else

        {!!Form::open(['url'=>['recaptcha-store'],'method'=>'POST' , 'files'=>True])!!}
           @include('admin.configuracion.recaptcha.forms.captchaCreate')
        {!!Form::close()!!}

        @endif

                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>




<div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-cogs font-red"></i>
<span class="caption-subject font-red sbold uppercase">Configurar MercadoPago</span>


    <div><br>
    <p>Para obtener las private_key y public_key ingresar a <a href="https://www.mercadopago.com/mla/account/credentials?type=basic">MercadoPago</a></p>
    </div>


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >


    
             
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
          
           @if(!empty($mercadopago))

    {!!Form::model($mercadopago,['url'=>['mercadopago-update',$mercadopago->id],'method'=>'PUT' , 'files'=>True])!!}
      @include('admin.configuracion.mercadopago.forms.mercadopago')
    {!!Form::close()!!}

        @else

        {!!Form::open(['url'=>['mercadopago-store'],'method'=>'POST' , 'files'=>True])!!}
           @include('admin.configuracion.mercadopago.forms.mercadopagoCreate')
        {!!Form::close()!!}

        @endif

                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>



                          

@endsection
