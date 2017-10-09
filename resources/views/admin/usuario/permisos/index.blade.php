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
    <li class=""><a href="{{ url('usuario') }}">Usuarios</a></li>
    <li ><a href="{{ url('usuario-roles') }}">Roles</a></li>
    <li class="active"><a href="{{ url('usuario-permisos') }}">Permisos</a></li>
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

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-permisos"><i class="fa fa-plus fa-lg"> </i></button>
               
      <a class="btn btn-success" data-toggle="modal" data-target="#importuser" >
      <i class="fa  fa-download fa-lg"></i> Importar</a>

      <a class="btn btn-success" href="{!! URL::to('/userExport') !!}">
      <i class="fa  fa-file-excel-o fa-lg"></i> exportar</a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
                <thead>
                    <tr>
                      <th>#Id</th>
                      <th>Nombre</th>
                      <th>slug</th>
                      <th>descripcion</th>
                      <th class="col-md-4">Operaciones</th> 
                    </tr>
                </thead>
                @foreach($permissions as $permission)
                <tbody>
                    <td>{{ $permission -> id}}</td>
                    <td>{{ $permission -> name}}</td>
                    <td>{{ $permission -> slug}}</td>
                    <td>{{ $permission -> descripcion}}</td>
                  
      
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditPermisos-{{ $permission->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--esto es para que solo el administrador pueda eliminar-->

<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeletePermisos-{{ $permission->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
 
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

<!--modal crear usuario-->
 @include('admin.usuario.modal.crear-permisos')
<!--modal crear usuario-->
 @include('admin.usuario.modal.edit-permisos')
 <!--modal crear usuario-->
 @include('admin.usuario.modal.delete-permisos')


<!--para renderizar la paginacion-->

{!! $permissions->render() !!} 
                          

@endsection
