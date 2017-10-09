@extends('layouts.app')
@include('alerts.errors')
@section('content')


<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Crear Nuevo Porcentaje De MercadoPago</h3>
            </div>
			<div class="box-body">
@include('alerts.request')


{!!Form::open(['route'=>'mercadopago.store', 'method'=>'POST' , 'files'=>True])!!}
@include('admin.paginas.home.mercadopago.forms.formscreate')
{!!Form::submit('registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection