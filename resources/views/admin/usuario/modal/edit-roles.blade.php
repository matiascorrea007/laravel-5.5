@foreach($roles as $role)
<div class="modal fade" id="EditRole-{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Editar Role {{ $role->name }}</h4>
         </div>



{{ Form::model($role, array('url' => array('usuario-roles-update', $role->id), 'method' => 'PUT', 'files'=>True)) }}
<div class="modal-body">      

@include('admin.usuario.forms.edit-roles')
</div>

<div class="modal-footer">
{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}
<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
{!!Form::close()!!}
</div>


     </div>
   </div>
 </div>
	@endforeach