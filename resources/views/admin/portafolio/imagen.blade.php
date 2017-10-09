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
                                   



 {!!Form::model($portafolio,['route'=>['PortafolioImagen.uploadFiles',$portafolio->id],'method'=>'POST' , 'files'=>true , 'id' => 'my-dropzone' , 'class' => 'dropzone'])!!}
    <div class="dz-message" style="height:200px;">
                        Drop your files here
    </div>
    <div class="dropzone-previews"></div>
    <button type="submit" class="btn btn-success" id="submit">Save</button>
{!! Form::close() !!}




        <div class="table-scrollable">
            <table class="table table-hover table-light">  
  <thead>
      <tr>
    <th>Imagen</th>
    <th>Portada</th>
    <th>Eliminar</th>
      </tr>
    </thead>
    @foreach($imagens as $imagen)
    <tbody>
   <td><i class="icon fa fa-fw"><img src="storage/portafolios/{{$portafolio->nombre}}/{{$imagen->filename}}"  width="100" height="80"></i></td>  

  <td></td>

<td>{!! Form::open(['method' => 'DELETE', 'url' => ['portafolio-destroyimagen',$imagen->id]]) !!}
<button type="submit" class="btn btn-danger">Delete</button>
{!! Form::close() !!}</td> 


  </tbody>
  @endforeach
  </table>



                                </div>
                            </div>
                        </div>


                        
                    </div>



@endsection
