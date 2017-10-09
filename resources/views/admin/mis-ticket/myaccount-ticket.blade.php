@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-ticket font-red"></i>
<span class="caption-subject font-red sbold uppercase">Mis Ticket</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

 <div class="box-body">
  <ul class="nav nav-tabs">
    <li class="active"><a href="{{ url('listar-venta') }}">ticket</a></li>
  </ul>
</div>   

<!--buscador-->
{!!Form::open(['url'=>'listar-venta', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">


<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Inicial')!!}
{!!Form::text('fecha_inicio',null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Fecha de Inicio'])!!}

<i class="fa fa-calendar"></i>
{!!Form::label('Fecha Final')!!}
{!!Form::text('fecha_final',null,['class'=>'form-control','id'=>'datepicker2','placeholder'=>'Fecha de Fin'])!!}

 <button type="submit" class="glyphicon glyphicon-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >

        <!--aqui van los botones-->
          <a class="btn btn-success  pull-right " data-toggle="modal"  href="#ticket-crear">
  <i class="fa fa-ticket fa-lg"></i> Nuevo Ticket</a>

       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
<div class="table-responsive">
  <table id="example2" class="table table-bordered table-hover">
  <thead>
    <th>#</th>
    <th>Subject</th>
    <th>Status</th>
    <th>Última actualización</th>
    <!-- <th>Agent</th> -->
    <th>Priority</th>
    <th>Category</th>
    <th>Propietario</th>
    
    
    <th class="col-md-4">Operaciones</th>
  </thead>
  @foreach($tickets as $ticket)
  <tbody>
  <!-- -->
  <td>{{ $ticket -> id}}</td>
  <td>{{ $ticket -> subject}}</td>

  <td>
      @if ($ticket -> status -> nombre == "PENDIENTE")
      <a href="#status-{{ $ticket->id }}" data-toggle="modal" ><span class="label label-warning">{{ $ticket -> status -> nombre}}</span></a>
      @elseif ($ticket -> status -> nombre == "SOLUCIONADO")
      <a href="#status-{{ $ticket->id }}" data-toggle="modal" ><span class="label label-success">{{ $ticket -> status -> nombre }}</span></a>
      @endif
  </td>

  <td>{{ $ticket -> updated_at}}</td>

  <td>
      @if ($ticket -> priority -> nombre == "MEDIA")
      <a href="" data-toggle="modal" ><span class="label label-success">{{ $ticket -> priority -> nombre}}</span></a>
      @elseif ($ticket -> priority -> nombre == "BAJA")
      <a href="" data-toggle="modal" ><span class="label label-warning">{{ $ticket -> priority -> nombre }}</span></a>
      @elseif ($ticket -> priority -> nombre == "ALTA")
      <a href="" data-toggle="modal" ><span class="label label-danger">{{ $ticket -> priority -> nombre}}</span></a>
      @endif
  </td>

  <td>{{ $ticket -> category -> nombre}}</td>

  @if(!empty($ticket->agent_id))
  <td>{{ $ticket -> agent -> nombre}}</td>
  @else
  <td>Nadie</td>
  @endif


<td>

<a class="btn btn-info btn-lg fa fa-envelope" href="{!! URL::to('myaccount-ticket-responder-'.$ticket->id) !!}"></a>


</td>
@endforeach
  </tbody>
  
  </table>

                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>


<!--modal de eliminar producto-->
@include('admin.mis-ticket.modal.ticket-crear')

<!--para renderizar la paginacion-->
 {!!$tickets->render() !!}
    


@section('scriptdatepicker')
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true  
    });
     $('#datepicker2').datepicker({
      autoclose: true
    });
  });
</script>
@stop

@endsection
