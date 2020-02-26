<!--Esta sección es el formulario el cuál reciclaremos para utilizar en las demás ventanas-->
<!--Extends layouts, lo utlizaremos para obtener diseños que ya en ese archivo esta declarados-->
@extends('layouts.app')
@section('content')
<div class="container">
{{$Modo=='crear'? 'Agregar registro':'Modificar registro'}}
<div class="form-group">
<label for="id" class="col-3" >{{'Id:'}}</label>
<input type="number" name="id"  id="id" class="col-3" 
value="{{isset($venta->id)?$venta->id:''}}"></div>
<div class="form-group">
<label for="herramienta" class="col-3" >{{'Herramienta:'}}</label>
<input type="text" name="herramienta" class="col-3" id="herramienta" value="{{isset($venta->herramienta)?$venta->herramienta:''}}"></div>
<div class="form-group">
<label for="noserie" class="col-3">{{'No.serie:'}}</label>
<input type="text" name="noserie" class="col-3" id="noserie" value="{{isset($venta->noserie)?$venta->noserie:''}}"></div>
<div class="form-group">
<label for="marca" class="col-3">{{'Marca:'}}</label>
<input type="text" name="marca" class="col-3" id="marca" value="{{isset($venta->marca)?$venta->marca:''}}"></div>
<div class="form-group">
<label for="existencia" class="col-3">{{'Existencia'}}</label>
<input type="number" name="existencia" class="col-3" id="existencia" value="{{isset($venta->existencia)?$venta->existencia:''}}"></div>
<div class="form-group">
<label for="precio" class="col-3">{{'Precio'}}</label>
<input type="number" name="precio" class="col-3" id="precio" value="{{isset($venta->precio)?$venta->precio:''}}"></div>
<input type="hidden" name="cantidad" class="col-3" id="cantidad" value="">
<input type="hidden" name="total" class="col-3" id="total" value="">
<input type="hidden" name="empleado" class="col-3" id="empleado" value="">
<input class="btn btn-success" type="submit" value="{{$Modo=='crear'? 'Agregar':'Modificar'}}">
<a href="{{url('herramientas')}}" class="btn btn-warning"> Regresar</a></div>
</div>@endsection