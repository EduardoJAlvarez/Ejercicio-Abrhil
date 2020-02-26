<!--El blade index, lo utilizaremos para mostrar el GRID el cual contendrá nuestros registros de los productos 
que se hay en la tienda-->
<!--Extends layouts, lo utlizaremos para obtener diseños que ya en ese archivo esta declarados-->
@extends('layouts.app')
<!--Impriremos un mensaje de la acción que se hizo -->
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
@section('content')
<div class="container">
<br><a href="{{url('herramientas/create')}}" ><button class="btn btn-info">Agregar Persona</button></a> 
<table id ="grid" class="table thead-light">
<thead class="thead-light">
    <tr>
        <th>Id</th>
        <th>Herramienta</th>
        <th>No.Serie</th>
        <th>Marca</th>
        <th>Existencia</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    <!--En este foreach obtendremos el array de los productos con los que cuenta la tienda y lo imprimiremos en el GRID-->
    @foreach($ventas as $venta)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$venta->herramienta}}</td>
        <td>{{$venta->noserie}}</td>
        <td>{{$venta->marca}}</td>
        <td>{{$venta->existencia-$venta->cantidad}}</td>
        <td>{{$venta->precio}}</td>
        <td><a href="{{url('/herramientas/'.$venta->id.'/edit')}}"><button class="btn btn-warning"> Editar</button></a>
            <form method="post" action="{{url('/herramientas/'.$venta->id)}}" style="display:inline;">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form></td>
    </tr>
    @endforeach
</tbody>
</table>
<!--Las librerias que ocuparemos para poder utilizar el GRID de Kendo UI-->

<link rel="stylesheet" href="styles/kendo.common.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.mobile.min.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
    <!--En esta sección ejecutaremos el GRID de Kendo UI-->
    <script>
       $("#grid").kendoGrid({
        dataSource:{pageSize:5},
    height: 550,
    groupable: true,
    scrollable: true,
    sortable: true,
    pageable: {
                    refresh: true,
                    pageSizes: true,
                    buttonCount: 10
                }
});
    </script>