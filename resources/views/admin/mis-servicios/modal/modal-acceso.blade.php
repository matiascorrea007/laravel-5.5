@foreach($transactions as $transaction)
<div class="modal fade " id="acceso-{{ $transaction->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
 
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Datos de Acceso al Servicio Web</h4>
      </div>



<div class="container">
  {!!Form::open(['url'=>['cambiar-status-web',$transaction->id], 'method'=>'POST' ])!!}




<br><br>
{!!Form::submit('Cambiar Estado',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
</div>

	
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
     </div>
   </div>
 </div>
@endforeach
