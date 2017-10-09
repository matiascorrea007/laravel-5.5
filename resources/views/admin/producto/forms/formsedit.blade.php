<style>
.color1{

	color: #00ba8b;
}	
</style>
<br><br>

<!-- .......................... tabla descripcion......................... -->

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion y Codigo</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>

<td>

<!--codigo-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('codigo:')!!}
	{!!Form::text('codigo',null,['class'=>'form-control ','placeholder'=>'ingrese el codigo del producto'])!!}
	<br>
	{!!DNS1D::getBarcodeHTML($producto->codigo, "C128")  !!} 
</div>

<!--descripcion-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('descripcion:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control ','placeholder'=>'ingrese descripcion del producto'])!!}
</div>

</td>
</tbody>
</table>

</div>
</div>
</div>

<!-- .................................... tabla Precios................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Precios</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>
<!--precio costo-->
<div class="form-horizontal">
	{!!Form::label('precio costo')!!}
	{!!Form::text('preciocosto',null,['class'=>'form-control','placeholder'=>'ingrese el precio de costo'])!!}
</div>

</td>
<td>
<!--precio venta-->
<div class="form-horizontal">
	{!!Form::label('precio venta')!!}
	{!!Form::text('precioventa',null,['class'=>'form-control','placeholder'=>'ingrese el precio de venta'])!!}
</div>

<!--rentabilidad 1-->
<div class="form-horizontal">
	{!!Form::label('rentabilidad 1')!!}
	{!!Form::text('rentabi1',null,['class'=>'form-control','placeholder'=>'ingrese la rentabilidad 1'])!!}
</div>
</td>
<td>
<!--precio 2-->
<div class="form-horizontal">
	{!!Form::label('precio Tachado')!!}
	{!!Form::text('precio2',null,['class'=>'form-control','placeholder'=>'ingrese el precio 2'])!!}
</div>
</td>

</tbody>
</table>

</div>
</div>
</div>


<!-- .................Categoria y sub categorias........................ -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Categoria</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<!--categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	
	<div class="form-horizontal">
	{!!Form::label('Categorias')!!}
	{!!Form::select('categoria_id',$categorias,null,['class'=>'form-control','id'=>'categoriaedit'])!!}
	</div>
</div>

<!--sub categoria-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	<div class="form-horizontal">
	{!!Form::label('Sub-Categorias')!!}
	{!!Form::select('categoriasub_id',$categoriasub,null,['class'=>'form-control','id'=>'subcategoria'])!!}
	</div>
</div>

</div>
</div>
</div>



<!--observacioes-->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion Corta</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcioncorta',null,['class'=>'my-editor2','id'=>'lfm2','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>

</div>
</div>
</div>
<br>

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Descripcion Larga</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('descripcionlarga',null,['class'=>'my-editor2','id'=>'lfm2','placeholder'=>'ingrese la observacion', 'row' => 100, 'cols' => 80])!!}
</div>
<br>
</div>
</div>
</div>



<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Imagen de Portada</h3>
 		</div>	
  <div class="panel-body">
<div class="row">
<!--imagen-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('file', 'Imagen') !!}
	{!!Form::file('imagen1')!!}
</div>

</div>
</div>
</div>


<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Opciones del Producto</h3>
 		</div>	
  <div class="panel-body">
<div class="row">


<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('Habilitado en la Web')!!}
	{!!Form::checkbox('habilitado',1)!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('Productos Hot')!!}
	{!!Form::checkbox('hot',1,false)!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
	{!!Form::label('Producto en Oferta')!!}
	{!!Form::checkbox('oferta',1,false)!!}
</div>

</div>
</div>
</div>



<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Tags</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
   <label for="tags" class="control-label"></label>
   <select name="tags[]" class="form-control" multiple="multiple" id="tags"></select>
</div>

</div>
</div>
</div>