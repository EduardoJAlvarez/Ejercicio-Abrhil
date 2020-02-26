<!--El blade index, lo utilizaremos para mostrar el GRID el cual contendrá los registros de los productos 
que se han vendido-->
<!--Extends layouts, lo utlizaremos para obtener diseños que ya en ese archivo esta declarados-->
@extends('layouts.app')

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
@section('content')
<div class="container">
<br><a href="{{url('vender')}}" ><button class="btn btn-info">Agregar Compra</button></a> 
<table id ="grid" class="table thead-light">
<thead class="thead-light">
    <tr>
        <th>Herramienta</th>
        <th>Marca</th>
        <th>Precio$</th>
        <th>Cantidad</th>
        <th>Total$</th>
        <th>Recibo</th>
    </tr>
</thead>
<tbody>
    <!--En este foreach obtendremos el array de los productos devueltos y lo imprimiremos en el GRID-->
    @foreach($ventas as $venta)
    <tr>
        <td>{{$venta->herramienta}}</td>
        <td>{{$venta->marca}}</td>
        <td>{{$venta->precio}}</td>
        <td>{{$venta->cantidad}}</td>
        <td>{{$venta->total}}</td>
        <td><button class="descargar"><a href="imagenes/lw34016625.png" download="factura.png">Descargar</a></button></td<button>
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