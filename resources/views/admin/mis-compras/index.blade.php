@extends('layouts.metronic')
@section('content')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-file-text font-red"></i>
<span class="caption-subject font-red sbold uppercase">Listado de Compras</span>
@include('alerts.request')
@include('alerts.success')

    <div><br>
    </div>

 <div class="box-body">
  <ul class="nav nav-tabs">
    <li class="active"><a href="{{ url('listar-venta') }}">Compras</a></li>
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
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
<table id="example2" class="table table-hover table-light">
  <thead>
      <tr>
    <td>Factura N</td>
    <td>Mostrar</td>
    <th>Pago</th>
    <th>Total</th>
    <th>Estatus</th>
    <th>Fecha</th>
    <th>Pdf</th>
    <th>Pagar</th>
      </tr>
    </thead>
    @foreach($ventas as $venta)
    <tbody>
      
      <td>#{{ $venta -> id}}</td>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#datalle-{{ $venta->id }}"><i class="fa fa-expand"> Detalle</i></button>
</td>

      <td>{{ $venta -> pago_tipo}}</td>
      <td>${{ $venta -> total}}</td>

      <td>
      @if ($venta -> status == "pagado")

      <span class="label label-success">{{ $venta -> status}}</span>

      @elseif ($venta -> status == "pendiente")
      <span class="label label-warning">{{ $venta -> status}}</span>

      @elseif ($venta -> status == "cancelado")
      <span class="label label-danger">{{ $venta -> status}}</span>

      <a href="#"><span class="label label-success">{{ $venta -> status}}</span></a>

      @elseif ($venta -> status == "pendiente")
      <a href="#"><span class="label label-warning">{{ $venta -> status}}</span></a>

      @elseif ($venta -> status == "cancelado")
      <a href="#"><span class="label label-danger">{{ $venta -> status}}</span></a>


      @endif
      </td>

      <td>{{ $venta -> created_at}}</td>

      <td><a href="{{ URL::to('venta-detalle-pdf/1/'.$venta->id) }}" target="_blank" ><button class="btn btn-danger"><i class="fa fa-file-pdf-o"> PDF</i></button></a></td>
      
       @if ($venta -> status == "pendiente")
      <td><a href="{{ URL::to('venta-pagar-'.$venta->id) }}" target="_blank" ><img src="storage/icono admin/credit-card.svg" alt="" ></a></td>
      @endif

  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

<!--para renderizar la paginacion-->
 {!!$ventas->render() !!}

    @include('admin.venta.modal.modal-detalle-venta')
    @include('admin.venta.modal.modal-status')



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
