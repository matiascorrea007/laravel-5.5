@foreach($permissions as $permission)
<div class="modal fade" id="EditPermisos-{{ $permission->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-full" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Editar Permiso {{ $permission->name }}</h4>
         </div>



{{ Form::model($permission, array('url' => array('usuario-permisos-update', $permission->id), 'method' => 'PUT', 'files'=>True)) }}
<div class="modal-body">      

@include('admin.usuario.forms.crear-permisos')
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