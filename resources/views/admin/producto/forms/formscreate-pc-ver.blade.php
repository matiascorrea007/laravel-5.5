

<style>
.color1{

	color: #00ba8b;
}	
</style>
<br><br>



<!-- .......................... Componentes......................... -->

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Componentes</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>

<td>
<!--GABINETE-->
<div class="form-horizontal">
	{!!Form::label('GABINETE:' )!!} {{$gab->descripcion}}--${{$gab->precioventa}}
	<img src="{{$gab->imagen1}}" class="user-image center-block" alt="" height="100" width="100"  >

</div>

<!--MOTHER-->
<div class="form-horizontal">
	{!!Form::label('MOTHER:')!!} {{$mot->descripcion}}--${{$mot->precioventa}}
	<img src="{{$mot->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>

<!--PROCESADOR-->
<div class="form-horizontal">
	{!!Form::label('PROCESADOR:')!!} {{$pro->descripcion}}--${{$pro->precioventa}}
	<img src="{{$pro->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>

<!--MOUSE-->
<div class="form-horizontal">
	{!!Form::label('MOUSE:')!!} {{$mou->descripcion}}--${{$mou->precioventa}}
	<img src="{{$mou->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>

<!--TECLADO-->
<div class="form-horizontal">
	{!!Form::label('TECLADO:')!!} {{$tec->descripcion}}--${{$tec->precioventa}}
	<img src="{{$tec->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>
</td>

<td>
<!--VIDEO-->
<div class="form-horizontal">
	{!!Form::label('VIDEO:')!!} {{$vid->descripcion}}--${{$vid->precioventa}}
	<img src="{{$vid->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>

<!--FUENTE-->
<div class="form-horizontal">
	{!!Form::label('FUENTE:')!!} {{$fue->descripcion}}--${{$fue->precioventa}}
	<img src="{{$fue->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>

<!--DISCO-->
<div class="form-horizontal">
	{!!Form::label('DISCO:')!!} {{$dis->descripcion}}--${{$dis->precioventa}}
	<img src="{{$dis->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>

<!--MEMORIA-->
<div class="form-horizontal">
	{!!Form::label('MEMORIA:')!!} {{$mem->descripcion}}--${{$mem->precioventa}}
	<img src="{{$mem->imagen1}}" class="user-image center-block" alt="" height="100" width="100" >
</div>	

<br>
<br>
<!--TOTAL-->
<div class="form-horizontal">
	{!!Form::label('TOTAL:')!!} {{$gab->precioventa + $mot->precioventa + $pro->precioventa + $mou->precioventa + $tec->precioventa + $vid->precioventa + $fue->precioventa + $dis->precioventa + $mem->precioventa}}
	
</div>	

<!--TOTAL DESCUENTO-->
<div class="form-horizontal">
	{!!Form::label('TOTAL DESCUENTO:')!!} {{$producto->precioventa}}
	
</div>


</td>
</tbody>
</table>

</div>
</div>
</div>




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

<!--iva id-->
<div class="form-horizontal">
	{!!Form::label('iva id')!!} <br>
	{!!Form::select('iva_id',$ivatipos,'',['class'=>'form-control'])!!}
</div>
</td>
<td>
<!--precio venta-->
<div class="form-horizontal" >
	{!!Form::label('precio venta')!!}
	{!!Form::text('precioventa',null,['class'=>'form-control','id'=>'resultado','placeholder'=>'ingrese el precio de venta'])!!}
</div>

<!--rentabilidad 1-->
<div class="form-horizontal">
	{!!Form::label('Ingrese el Descuento(%):')!!}
	<input name="descuento" class="descuento form-control" onblur="if(this.value == ''){this.value='0'}"  onKeyUp="calcular_descuento();" type="text" id="desc1" value="0"></h3>
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

<!-- .................................... tabla stock................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Stock</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>

</thead>
<tbody>


<td>
<!--stock actul-->
<div class="form-horizontal">
	{!!Form::label('stock actul')!!}
	{!!Form::text('stockactual',null,['class'=>'form-control','placeholder'=>'ingrese el stock actul'])!!}
</div>
</td>
<td>
<!--stock critico-->
<div class="form-horizontal">
	{!!Form::label('stock critico')!!}
	{!!Form::text('stockcritico',null,['class'=>'form-control','placeholder'=>'ingrese el stock critico'])!!}
</div>
</td>
<td>
<!--stock pedido-->
<div class="form-horizontal">
	{!!Form::label('stock pedido')!!}
	{!!Form::text('stockpedido',null,['class'=>'form-control','placeholder'=>'ingrese el stock de pedido'])!!}
</div>
</td>
</tbody>
</table>

</div>
</div>
</div>

<!-- ...........................tabla Rubro , Marca y Provedor................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Rubro , Marca y Provedor</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>
<!--rubro id-->
<div class="form-horizontal">
	{!!Form::label('rubro id')!!}
	{!!Form::select('rubro_id',$rubros,null,['class'=>'form-control'])!!}
</div>
</td>
<td>
<!--marca id-->
<div class="form-horizontal">
	{!!Form::label('marca id')!!}
	{!!Form::select('marca_id',$marcas,null,['class'=>'form-control'])!!}
</div>
</td>
<td>
<!--provedor-->
<div class="form-horizontal">
	{!!Form::label('provedores')!!}
	{!!Form::select('provedor_id',$provedores,null,['class'=>'form-control'])!!}
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


<!-- ...........................tabla otras opciones................................. -->
<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Otras Opciones</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>
<td>
<!--codigo alternativo-->
<div class="form-horizontal">
	{!!Form::label('codigo alternativo')!!}
	{!!Form::text('cod_alter',null,['class'=>'form-control','placeholder'=>'ingrese el codigo alternativo'])!!}
</div>
</td>

<td>
<!--ubicacion-->
<div class="form-horizontal ">
	{!!Form::label('ubicacion')!!}
	{!!Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>'ingrese la ubicacion'])!!}
</div>
</td>

<td>
<!--codigo de bulto-->
<div class="form-horizontal ">
	{!!Form::label('codigo de bulto')!!}
	{!!Form::text('cod_bulto',null,['class'=>'form-control','placeholder'=>'ingrese el codigo de bulto'])!!}
</div>
<!--cantidad de bulto-->
<div class="form-horizontal ">
	{!!Form::label('cantidad de bulto')!!}
	{!!Form::text('cant_bulto',null,['class'=>'form-control','placeholder'=>'ingrese la cantidad de bulto'])!!}
</div>

</td>

</tbody>
</table>

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
	{!!Form::textarea ('descripcioncorta',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
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
	{!!Form::textarea ('descripcionlarga',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion', 'row' => 100, 'cols' => 80])!!}
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
	{!!Form::checkbox('habilitado',1,true)!!}
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

