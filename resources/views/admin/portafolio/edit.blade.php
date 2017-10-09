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
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                   
  
            {!!Form::model($portafolio,['url'=>['portafolio-update',$portafolio->id],'method'=>'PUT' , 'files'=>True])!!}
              @include('admin.portafolio.forms.create')
              <button type="submit" class="btn btn-primary">Guardar</button>
            {!!Form::close()!!}


                                    
    


                                </div>
                            </div>
                        </div>


                        
                    </div>



@include('admin.portafolio.modal.create')
@endsection