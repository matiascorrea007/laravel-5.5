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
    <li class="active"><a href="{{ url('usuario-roles') }}">Roles</a></li>
    <li class=""><a href="{{ url('usuario-permisos') }}">Permisos</a></li>
  </ul>
</div>  
  




     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-roles"><i class="fa fa-plus fa-lg"> </i></button>
               
      
       </div>
   </div>


        </div><!--portlet-title-->


    

{{ Form::model($role, array('url' => array('usuario-roles-update', $role->id), 'method' => 'PUT', 'files'=>True)) }}
@include('admin.usuario.forms.edit-roles')
{!!Form::close()!!}






{{ Form::open(['url' => ['usuario-rol-asignar-permiso'], 'method' => 'GET', 'files'=>True]) }}


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Asignar Permisos a este Rol</h3>
    </div>  
  <div class="panel-body">
<div class="row">


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

  </div>
  </div>
  </div>

{!!Form::close()!!}




    <div class="table-responsive" >
      <table  class="table table-hover table-striped" cellspacing="0" width="100%">
                <thead>
                <th colspan="5" style="text-align: center; background-color: #b8ccde;" >Permisos del Usuario {{ $role->name }}</th>
                </thead>
        <thead>
                <th>codigo</th>
                <th>nombre</th>
                <th>slug</th>
                <th>descripcion</th>
                <th>Acción</th>
            
        </thead>
      <tbody id="datos" >
      @foreach($role->permissions as $permiso)
     <tr role="row" class="odd" id="filaP_{{ $permiso->id }}">
      <td>{{ $permiso->id }}</td>
      <td><span class="label label-default">{{ $permiso->name or "Ninguno" }}</span></td>
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
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>




                          
                          

@endsection
