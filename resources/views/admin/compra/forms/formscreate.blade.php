<style>
.color1{

	color: #00ba8b;
}	
</style>
<br><br>



<!-- .......................... Opciones......................... -->

<div class="panel panel-primary">
		<div class="panel-heading">
   		 	<h3 class="panel-title">Tipo de Pago</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<table class="table">
<thead>
		<th class="color1"></th>
</thead>
<tbody>

<td>


		<div class="col-lg-3 col-sm-3 col-md-13 col-xs-3">
    		<div class="form-group">
            	<label for="cliente">Provedor</label>
            	<select name="idprovedor" id="idprovedor" class="form-control selectpicker" data-live-search="true">
                    @foreach($provedores as $provedor)
                     <option value="{{$provedor->id}}">Nombre: {{$provedor->razonsocial}}  --- Cuit: {{$provedor->cuit}}</option>
                     @endforeach
                </select>
            </div>
    	</div>

		<!--iva id-->
		<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
		{!!Form::label('Tipo de IVA')!!} <br>
		{!!Form::select('iva_id',$ivatipos,'',['class'=>'form-control'])!!}
		</div>

		<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
        <label for="tipo_pago" class="control-label">Tipo de pago</label>
        {!! Form::select('tipo_pago', config('options.tipopago'),'', array('class' => 'form-control')) !!}
        </div>

        <div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
        <label for="entregado" class="control-label">Entregado</label>
        {!! Form::select('entregado', config('options.entregado'),'', array('class' => 'form-control')) !!}
        </div><br>

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
<i class="fa fa-sticky-note-o"></i>
	{!!Form::label('Comprobante:')!!}
	{!!Form::text('comprobante',null,['class'=>'form-control ','placeholder'=>'ingrese el Comprobante'])!!}
</div>

<!--descripcion-->
<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
<i class="fa fa-book"></i>
	{!!Form::label('Numero de Factura:')!!}
	{!!Form::text('numerofactura',null,['class'=>'form-control ','placeholder'=>'ingrese Numero de Factura'])!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
<i class="fa fa-calendar"></i>
{!!Form::label('Fecha De Emision')!!}
{!!Form::text('emision',null,['class'=>'form-control datepicker','placeholder'=>'ingrese Fecha De Emision'])!!}
</div>

<div class="form-horizontal col-xs-12 col-sm-12 col-md-3">
<i class="fa fa-money"></i>
{!!Form::label('Gastos de Envio')!!}
{!!Form::text('gastoenvio',null,['class'=>'form-control ','placeholder'=>'ingrese el Gastos de Envio'])!!}
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
   		 	<h3 class="panel-title">Observacion</h3>
 		</div>	
  <div class="panel-body">
<div class="row">

<div class="form-horizontal col-xs-12 col-sm-12 col-md-12">
	{!!Form::label('')!!}
	{!!Form::textarea ('comentario',null,['class'=>'my-editor','id'=>'lfm','placeholder'=>'ingrese la observacion'])!!}<br><br><br>
</div>

</div>
</div>
</div>
<br>




<div class="">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label>Artículo</label>
                        <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
                            @foreach($productos as $producto)
                            <option value="{{$producto->id}}_{{$producto->stockactual}}_{{$producto->preciocosto}}">{{$producto->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="pcantidad" id="pcantidad" class="form-control" 
                        placeholder="cantidad">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" disabled name="pstock" id="pstock" class="form-control" 
                        placeholder="Stock">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="precio_compra">Precio Compra</label>
                        <input type="number"  name="pprecio_compra" id="pprecio_compra" class="form-control" 
                        placeholder="P. Compra">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="number" name="pdescuento" id="pdescuento" class="form-control" 
                        placeholder="Descuento" value="0">
                    </div>
                </div> 
                
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                       <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color:#A9D0F5">
                            <th>Opciones</th>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Precio Venta</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                        </thead>
                        <tfoot>
                            <tr>
                                <th  colspan="5"><p align="right">TOTAL:</p></th>
                                <th><p align="right"><span id="total">S/. 0.00</span> <input type="hidden" name="total_compra" id="total_compra"></p></th>
                            </tr>
                            <tr>
                                <th colspan="5"><p align="right">TOTAL IMPUESTO (18%):</p></th>
                                <th><p align="right"><span id="total_impuesto">S/. 0.00</span></p></th>
                            </tr>
                            <tr>
                                <th  colspan="5"><p align="right">TOTAL PAGAR:</p></th>
                                <th><p align="right"><span align="right" id="total_pagar">S/. 0.00</span></p></th>
                            </tr>  
                        </tfoot>
                        <tbody>
                            
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
        <div class="form-group">
              <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
              <a href="{!! URL::to('compra-show') !!}" class="btn btn-danger">Vaciar Venta <i class="fa fa-trash"></i></a>
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
      </div>
    </div>   