@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-money font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Gastos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

<!--buscador-->

{!!Form::open(['url'=>'gasto', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">


<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Inicial')!!}
{!!Form::text('fecha_inicio',null,['class'=>'form-control datepicker','placeholder'=>'Fecha de Inicio'])!!}

<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Final')!!}
{!!Form::text('fecha_final',null,['class'=>'form-control datepicker','placeholder'=>'Fecha de Fin'])!!}

 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}

 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

      <a class="btn btn-success" data-toggle="modal" data-target="#crear-gasto">
      <i class="fa fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table id="example2" class="table table-hover table-light">
  <thead>
    <th>Fecha gasto</th>
    <th>Tipo gasto</th>
    <th>Descripcion</th>
    <th>Justificante</th>
    <th>Cliente vinc. </th>
    <th>Importe</th>
    <th>Tipo pago</th>
    <th class="col-md-4">Operaciones</th>
  </thead>
  @foreach($gastos as $gasto)
  <tbody>
  <!-- -->
    <td>{{ $gasto -> fecha}}</td>
    <td>{{ $gasto -> tipo_gasto}}</td>
    <td>{{ $gasto -> descripcion}}</td>
    <td class="text-center"><a href="#"><i class='fa  fa-file-text-o'></i></a>{{ $gasto -> justificante}}</td>
    <td>{{ $gasto -> cliente_vinc}}</td>
    <td>${{ $gasto -> importe}}</td>
    <td>{{ $gasto -> tipo_pago}}</td>

<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ver-{{ $gasto->id }}"><i class="fa fa-expand"> Ver</i></button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Edit-{{ $gasto->id }}"><i class="fa fa-edit"> Editar</i></button>

<!--esto es para que solo el administrador pueda eliminar-->
@if (Auth::user()->perfil_id == 1)
<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete-{{ $gasto->id }}"><i class="fa fa-trash-o"> Eliminar</i></button>
@endif
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



<!--modal editar gasto-->
 @include('admin.gasto.modal.modal-edit-gasto')
<!--modal eliminar gasto-->
 @include('admin.gasto.modal.modal-delete-gasto')
 <!--modal ver gasto-->
 @include('admin.gasto.modal.modal-ver-gasto')
 <!--modal crear gasto-->
 @include('admin.gasto.modal.modal-crear-gasto')


<!--para renderizar la paginacion-->
  {!! $gastos->render() !!}


@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true  
    });
  });
</script>
@stop


@endsection
