<!--Esta sección es el formulario el cuál reciclaremos para utilizar en las demás ventanas-->
<!--Extends layouts, lo utlizaremos para obtener diseños que ya en ese archivo esta declarados-->
@extends('layouts.app')
<!--Apartir de aqui empieza el formulario -->
@section('content')
<div class="container">
{{$Modo=='crear'? 'Agregar registro':'Modificar registro'}}
<div class="form-group">
<label for="id" class="col-3" >{{'Id:'}}</label>
<input type="number" name="id"  id="id" class="col-3" 
value="{{isset($devuelto->id)?$devuelto->id:''}}"></div>
<div class="form-group">
<label for="herramienta" class="col-3" >{{'Herramienta:'}}</label>
<input type="text" name="herramienta" class="col-3" id="herramienta" value="{{isset($devuelto->herramienta)?$devuelto->herramienta:''}}"></div>
<div class="form-group">
<label for="marca" class="col-3">{{'Marca:'}}</label>
<input type="text" name="marca" class="col-3" id="marca" value="{{isset($devuelto->marca)?$devuelto->marca:''}}"></div>
<div class="form-group">
<label for="cantidad" class="col-3">{{'Cantidad'}}</label>
<input type="number" name="cantidad" class="col-3" id="cantidad" value="{{isset($devuelto->cantidad)?$devuelto->cantidad:''}}"></div>
<div class="form-group">
<label for="devuelto" class="col-3">{{'Fecha'}}</label>
<input type="date" name="fecha" class="col-3" id="fecha" value="{{isset($devuelto->fecha)?$devuelto->fecha:''}}"></div>
<input class="btn btn-success" type="submit" value="{{$Modo=='crear'? 'Agregar':'Modificar'}}">
<a href="{{url('devueltos')}}" class="btn btn-warning"> Regresar</a></div>
</div>@endsection