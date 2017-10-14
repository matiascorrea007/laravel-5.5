@extends('layouts.admin-pro')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->



           <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"><i class="icon-user font-red"></i>
                  <span class="caption-subject font-red sbold uppercase">Seccion de Permisos</span></h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{!! URL::to('/') !!}">Home</a></li>
                            <li class="breadcrumb-item "><a href="{!! URL::to('/usuario') !!}">Usuarios</a></li>
                            <li class="breadcrumb-item active"><a href="#">Permisos</a></li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>





                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

@include('alerts.request')
@include('alerts.success')




        <h4 class="card-title">

      <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#crear-permisos"><i class="fa fa-plus fa-lg"> </i></button>

      
           </h4>

           

<ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link "  href="{{ url('usuario') }}" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Usuarios</span></a> </li>
          
          <li class="nav-item"> <a class="nav-link "  href="{{ url('usuario-roles') }}" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Roles</span></a> </li>
          
          <li class="nav-item"> <a class="nav-link active"  href="{{ url('usuario-permisos') }}" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Permisos</span></a> </li>
      </ul>

                                <br><br>


  <!--buscador-->
{!!Form::open(['url'=>'usuario', 'method'=>'GET' , 'class'=>' form-group m-t-40 row' , 'role'=>'Search'])!!}
  {!!Form::label('')!!}
  <div class="form-group col-md-3 m-t-20">
  {!!Form::text('nombre',null,['class'=>'form-control form-control-line','placeholder'=>'nombre y apellido'])!!}
  </div>

  <div class="form-group col-md-3 m-t-20">
  {!!Form::text('email',null,['class'=>'form-control form-control-line','placeholder'=>'Email'])!!}
  </div>

  <div class="form-group col-md-3 m-t-20">
  <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
  </div>
{!!Form::close()!!}
 <!--endbuscador-->


      <h6 class="card-subtitle"></h6>
      <div class="table-responsive m-t-40">
      <table id="" class="table full-color-table full-inverse-table hover-table" cellspacing="0" width="100%">
               <thead>
                    <tr>
                      <th>#Id</th>
                      <th>Nombre</th>
                      <th>slug</th>
                      <th>descripcion</th>
                      <th >Operaciones</th> 
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
