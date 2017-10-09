<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Imagen de Usuario</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="input-group input-icon right col-xs-12 col-sm-12 col-md-3">
	{!!Form::file('path')!!}
</div>

</div>
</div>
</div>




<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Datos del usuario</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Nombre :</i></span>
	{!!Form::text('nombre',null,['class'=>'form-control'])!!}
</div>
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-user font-blue"> Apellido :</i></span>
	{!!Form::text('apellido',null,['class'=>'form-control'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right ">
 <span class="input-group-addon"><i class="fa fa-key font-blue"> Password :</i></span>
	{!!Form::password('password',['class'=>'form-control'])!!}
</div>
</div>
</div>




<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-key font-blue"> Re-Password :</i></span>
	{!!Form::text('re_password',null,['class'=>'form-control'])!!}
</div>
</div>



<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-envelope font-blue"> Email :</i></span>
	{!!Form::text('email',null,['class'=>'form-control'])!!}
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-4">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-map-marker font-blue"></i> Direccion:</span>
	{!!Form::text('direccion',null,['class'=>'form-control'])!!}
</div>
</div>
</div>


<div class="row">
<div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-phone font-blue"> Telefono :</i></span>
 <input type="number" name="telefono"  pattern="^\d{4}-\d{3}-\d{4}$" maxlength="11" class="form-control" required>
</div>
</div>


<div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group input-icon right">
 <span class="input-group-addon"><i class="fa fa-user font-red"> Tipo :</i></span>
  				<select  name="perfil_id" class="form-control">
                           @foreach($roles as $rol)
                           <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                           @endforeach
                  </select>    
	
</div>
</div>
</div>


</div>
</div>




<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Asignar Roles</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group" style="text-align:left">
<!--agregamos rol1-{{$user->id}} ya que estamos trabajanndo con modales entonce si colocamos ID solo funcionara para el mimer modal y si ponemos una class se vera lo mismo en todos por eso colocamos un id dinamico -->
               <select  id="rol1-{{$user->id}}" name="rol1" class="form-control rol1">
                           @foreach($roles as $rol)
                           <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                           @endforeach
      
                  </select>
                    <span class="input-group-btn">
                    <button type="button" class="btn green" onclick="asignarRoles({{ $user->id }});" >
                    <i class="fa fa-check"></i> Asignar Roles </button>  
                    </span>
</div>       
</div>

<div class="form-group col-xs-12 col-sm-12 col-md-6">
<div class="input-group" style="text-align:left">
<!--agregamos rol2-{{$user->id}} ya que estamos trabajanndo con modales entonce si colocamos ID solo funcionara para el mimer modal y si ponemos una class se vera lo mismo en todos por eso colocamos un id dinamico -->
               <select  id="rol2-{{$user->id}}" name="perfil_id" class="form-control">
                           @foreach($roles as $rol)
                           <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                           @endforeach
      
                  </select>
                    <span class="input-group-btn">
                    <button type="button" class="btn green" onclick="quitarRoles({{ $user->id }});" >
                    <i class="fa fa-close"></i> Quitar Roles </button>  
                    </span>
</div>       
</div>

<!--agregamos zona_etiquetas_roles-{{$user->id}} ya que estamos trabajanndo con modales entonce si colocamos ID solo funcionara para el mimer modal y si ponemos una class se vera lo mismo en todos por eso colocamos un id dinamico -->
 <div id="zona_etiquetas_roles-{{$user->id}}" style="background-color:white;" >Roles asignados:
    @foreach($user->getRoles() as $rl)
      <span class="label label-warning" style="margin-left:10px;">{{ $rl }} </span> 
    @endforeach
  </div>

</div>
</div>
</div>
