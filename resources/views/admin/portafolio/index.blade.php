@extends('layouts.metronic')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')

				<div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject bold uppercase font-dark">Portafolio</span>
                                        <span class="caption-helper">Tus trabajos...</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" data-target="#nuevo-portafolio" >
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                   



 <table class="table table-hover table-light">       
  <thead>
    <th>#</th>
    <th>Imagen</th>
    <th>Descripcion</th>
    <th>demo</th>
    <th>cliente</th>
    <th class="col-md-6">Operaciones</th>
  </thead>
  @foreach($portafolios as $portafolio)
<tbody>

    <td>{{ $portafolio -> id}}</td>
  <!-- si es sin foto cargo la foto por defecto -->
  @if($portafolio->filename == "portafolio.jpg")
    <td><img src="storage/portafolios/{{$portafolio->filename}}" alt="" height="100" width="100" ></td>
     <!-- caso contrario cargo la foto -->
  @elseif($portafolio->filename != "portafolio.jpg")
    <td><img src="{{$portafolio->imagen}}" alt="" height="100" width="100" ></td>
  @endif
  

    <td>{!! $portafolio -> descripcion !!}</td>
    <td>{{ $portafolio -> demo}}</td>
    <td>{{ $portafolio -> cliente}}</td>


<td>
<a class="btn btn-success btn-lg fa fa-picture-o" href="{!! URL::to('portafolio-uploadimagen-'.$portafolio->id) !!}"></a>

<a class="btn btn-primary btn-lg fa fa-edit" href="{!! URL::to('portafolio-edit-'.$portafolio->id) !!}"></a>

<a class="btn btn-success btn-lg fa fa-globe" href="{!! URL::to('item-detalle-'.$portafolio->slug) !!}"></a>

<!--esto es para que solo el administrador pueda eliminar-->

<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger btn-lg fa fa-trash-o" data-toggle="modal" data-target="#confirmDelete-{{ $portafolio->id }}"></button>


</td>

  </tbody>
  @endforeach
  </table>


                                </div>
                            </div>
                        </div>


                        
                    </div>



@include('admin.portafolio.modal.create')
@include('admin.portafolio.modal.delete')
@endsection