@foreach($clientes as $cliente)
<div class="modal fade" id="ver-{{ $cliente->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Ver Cliente {{ $cliente->clie_nombres }}</h4>
         </div>


{!!Form::model($cliente,['url'=>['cliente-update',$cliente->id],'method'=>'PUT'])!!}

<div class="modal-body">  
<fieldset disabled> 
@include('admin.cliente.forms.formscreate')
</fieldset>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
</div>

{!!Form::close()!!}

     </div>
   </div>
 </div>
	@endforeach