

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Datos del Roles</h3>
    </div>  
  <div class="panel-body">
<div class="row">


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Nombre :</i></span>
  {!!Form::text('name',null,['class'=>'form-control'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Slug :</i></span>
  {!!Form::text('slug',null,['class'=>'form-control'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-key font-blue"> Descripcion :</i></span>
  {!!Form::text('description',null,['class'=>'form-control'])!!}
</div>
</div>
</div>



{!!Form::submit('modificar',['class'=>'btn btn-primary pull-right'])!!}

</div>
</div>






