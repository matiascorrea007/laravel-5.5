@extends('layouts.admin-pro')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->



           <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"><i class="icon-user font-red"></i>
                  <span class="caption-subject font-red sbold uppercase">Seccion de Editar Roles</span></h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{!! URL::to('/') !!}">Home</a></li>
                            <li class="breadcrumb-item "><a href="{!! URL::to('/usuario') !!}">Usuarios</a></li>
                            <li class="breadcrumb-item active"><a href="{!! URL::to('/usuario-roles') !!}">Roles</a></li>
                            <li class="breadcrumb-item active"><a href="#">Editar Roles</a></li>
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

       <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#crear-roles"><i class="fa fa-plus fa-lg"> </i></button>

      
           </h4>

           

<ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link "  href="{{ url('usuario') }}" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Usuarios</span></a> </li>
          
          <li class="nav-item"> <a class="nav-link active"  href="{{ url('usuario-roles') }}" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Roles</span></a> </li>
          
          <li class="nav-item"> <a class="nav-link"  href="{{ url('usuario-permisos') }}" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Permisos</span></a> </li>
      </ul>

                                <br><br>




      <h6 class="card-subtitle"></h6>

<div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Editar  Rol</h4></div>
                            <div class="card-body">
                                {{ Form::model($role, array('url' => array('usuario-roles-update', $role->id), 'method' => 'PUT', 'files'=>True)) }}
                                @include('admin.usuario.forms.edit-roles')
                                {!!Form::close()!!}
                            </div>
                        </div>


 <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Asignar Permisos a este Rol</h4></div>
                            <div class="card-body">
    {{ Form::open(['url' => ['usuario-rol-asignar-permiso'], 'method' => 'GET', 'files'=>True]) }}
      
      <div class="form-group col-xs-12 col-sm-12 col-md-6">
      <div class="input-group" style="text-align:left">
<!--agregamos rol1-{{$role->id}} ya que estamos trabajanndo con modales entonce si colocamos ID solo funcionara para el mimer modal y si ponemos una class se vera lo mismo en todos por eso colocamos un id dinamico -->
                  <select  id="rol1-{{$role->id}}" name="idpermiso" class="form-control rol1">
                           @foreach($todosLosPermisos as $todosLosPermiso)
                           <option value="{{ $todosLosPermiso->id }}">{{ $todosLosPermiso->name }}</option>
                           @endforeach
                  </select>
                    <span class="input-group-btn">
                    <button type="submit" class="btn green">
                    <i class="fa fa-check"></i> Asignar Permiso </button>  
                    </span>
    </div>       
    </div>
  <!--mandamos oculto el campo del id del rol-->
  <input type="text" value="{{$role->id}}" name="idrol" hidden>
   
            {!!Form::close()!!}

                            </div>
                        </div>




<div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Permisos del Usuario {{ $role->name }}</h4></div>
                            <div class="card-body">
                 

  <div class="table-responsive m-t-40">
      <table id="" class="table full-color-table full-inverse-table hover-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                      <th>codigo</th>
                      <th>nombre</th>
                      <th>slug</th>
                      <th>descripcion</th>
                      <th>Acción</th>
                    </tr>
                </thead>
                 <tbody id="datos">
      @foreach($role->permissions as $permiso)
     <tr role="row" class="odd" id="filaP_{{ $permiso->id }}">
      <td>{{ $permiso->id }}</td>
      <td><span class="label label-primary">{{ $permiso->name or "Ninguno" }}</span></td>
      <td class="mailbox-messages mailbox-name"><a href="javascript:void(0);" style="display:block"></i>&nbsp;&nbsp;{{ $permiso->slug  }}</a></td>
      <td>{{ $permiso->description }}</td>
      <td>
      <button type="button"  class="btn  btn-danger btn-xs"  onclick="borrarPermisoaRoles({{ $role->id }},{{ $permiso->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
      </td>
       </tr>
      @endforeach
    </tbody>
    </table>
                                </div>
                            </div>
                        </div>






      
                                </div>
                            </div>
                        </div>
                    </div>
                




<!--modal crear role-->
 @include('admin.usuario.modal.crear-roles')


                          
                          

@endsection
