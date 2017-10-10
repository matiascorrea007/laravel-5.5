@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="icon-user font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Usuarios</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

 <div class="box-body">
  <ul class="nav nav-tabs">
    <li class="active"><a href="{{ url('usuario') }}">Usuarios</a></li>
    <li class=""><a href="{{ url('usuario-roles') }}">Roles</a></li>
    <li class=""><a href="{{ url('usuario-permisos') }}">Permisos</a></li>
  </ul>
</div>  



<!--buscador-->
{!!Form::open(['url'=>'usuario', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
	{!!Form::label('')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre y apellido'])!!}
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
 
 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-usuario"><i class="fa fa-plus fa-lg"> </i></button>
               
      <a class="btn btn-success" data-toggle="modal" data-target="#importuser" >
      <i class="fa  fa-download fa-lg"></i> Importar</a>

      <a class="btn btn-success" href="{!! URL::to('/userExport') !!}">
      <i class="fa  fa-file-excel-o fa-lg"></i> exportar</a>
      
       </div>
   </div>


        </div><!--portlet-title-->

    <div class="portlet-body">
            <table id="mydatatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                      <th>nombre</th>
                      <th>correo</th>
                      <th>telefono</th>
                      <th>direccion</th>
                      <th>puntos</th>
                      <th class="col-md-4">operaciones</th> 
            </tr>
        </thead>
        @foreach($users as $user)
        <tbody>

        </tbody>
        @endforeach
    </table>

                </div>







            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--modal crear usuario-->
 @include('admin.usuario.modal.crear-usuario')
<!--modal crear usuario-->
 @include('admin.usuario.modal.edit-usuario')
 <!--modal crear usuario-->
 @include('admin.usuario.modal.delete-usuario')


<!--para renderizar la paginacion-->

{!! $users->render() !!} 
                          


@section('mis-scripts')
{!!Html::script('admin/metronic/js/mis-funciones/datatable.js')!!}
@stop



@endsection
