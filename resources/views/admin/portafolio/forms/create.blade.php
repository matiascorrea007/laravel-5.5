<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Nombre del Portafolio</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::text('nombre',null,['class'=>'form-control ','placeholder'=>'ingrese el Nombre'])!!}
</div>

</div>
</div>
</div>
<br>


<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Imagen de Portada</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal  col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::file('imagen')!!}
</div>

</div>
</div>
</div>
<br>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcion',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la Descripcion'])!!}<br><br><br>
</div>

</div>
</div>
</div>
<br>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Url del Demo</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::text ('demo',null,['class'=>'form-control','placeholder'=>'ingrese la url del demo'])!!}
</div>
<br>
</div>
</div>
</div>


<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Cliente</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::text ('cliente',null,['class'=>'form-control','placeholder'=>'ingrese el cliente'])!!}
</div>
<br>
</div>
</div>
</div>




