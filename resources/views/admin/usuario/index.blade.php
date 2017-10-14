@extends('layouts.admin-pro')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


              <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"><i class="icon-user font-red"></i>
                  <span class="caption-subject font-red sbold uppercase">Seccion de Usuarios</span></h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{!! URL::to('/') !!}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{!! URL::to('/usuario') !!}">Usuarios</a></li>
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

      <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#crear-usuario"><i class="fa fa-plus fa-lg"> </i></button>

      <a class="btn btn-success  pull-right" data-toggle="modal" data-target="#importuser" >
      <i class="fa  fa-download fa-lg"></i> Importar</a>

      <a class="btn btn-success  pull-right" href="{!! URL::to('/userExport') !!}">
      <i class="fa  fa-file-excel-o fa-lg"></i> exportar</a>
      
           </h4>

           

<ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active"  href="{{ url('usuario') }}" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Usuarios</span></a> </li>
          
          <li class="nav-item"> <a class="nav-link"  href="{{ url('usuario-roles') }}" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Roles</span></a> </li>
          
          <li class="nav-item"> <a class="nav-link"  href="{{ url('usuario-permisos') }}" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Permisos</span></a> </li>
      </ul>

                                <br><br>

                                <!--buscador-->
{!!Form::open(['url'=>'usuario', 'method'=>'GET' , 'class'=>' form-material m-t-40 row' , 'role'=>'Search'])!!}

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
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="mydatatable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nombre</th>
                                                <th>correo</th>
                                                <th>telefono</th>
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
                        </div>
                    </div>
                </div>









<!--modal crear usuario-->
 @include('admin.usuario.modal.crear-usuario')
<!--modal crear usuario-->
 @include('admin.usuario.modal.edit-usuario')
 <!--modal crear usuario-->
 @include('admin.usuario.modal.delete-usuario')


<!--para renderizar la paginacion-->


                          


@section('mis-scripts')
{!!Html::script('admin/adminpro/js/mis-funciones/datatable.js')!!}
@stop



@endsection
