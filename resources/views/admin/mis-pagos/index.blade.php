@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-paypal font-red"></i>
<span class="caption-subject font-red sbold uppercase">Mis Pagos</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

<!--buscador-->

{!!Form::open(['url'=>'pago', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
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
      
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
    <th>#</th>
    <th>Medio</th>
    <th>Monto</th>
    <th>Creado</th>
    <th>Acreditado</th>
    <th>Estado</th>
  </thead>
  @foreach($pagos as $pago)
  <tbody>
  <!-- -->
    <td>{{ $pago -> id}}</td>
    <td>{{ $pago -> medio}}</td>
    <td>${{ $pago -> monto}}</td>
    <td>{{ $pago -> created_at}}</td>
    <td>{{ $pago -> update_at}}</td>
     <td>
      @if ($pago -> estado == "pagado")
      <span class="label label-success">{{ $pago -> estado}}</span>

      @elseif ($pago -> estado == "pendiente")
      <span class="label label-warning">{{ $pago -> estado}}</span>

      @elseif ($pago -> estado == "cancelado")
      <span class="label label-danger">{{ $pago -> estado}}</span>

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
 @include('admin.mis-pagos.modal.modal-edit-pago')
<!--modal eliminar pago-->
 @include('admin.mis-pagos.modal.modal-delete-pago')
 <!--modal ver pago-->
 @include('admin.mis-pagos.modal.modal-ver-pago')
 <!--modal ver pago-->
 @include('admin.mis-pagos.modal.modal-crear-pago')

<!--para renderizar la paginacion-->
  {!! $pagos->render() !!}
 


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
