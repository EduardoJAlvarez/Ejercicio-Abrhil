<!--En esta ventana nos ayudara interectuar con los datos que deseamos actualizar de los productos que le muestra al
cliente, obtendremos sus valores apartir de su id -->
<div class="contaneir">
<form action="{{url('/herramientas/'.$venta->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PATCH')}}
    @include('herramientas.form', ['Modo'=>'editar'])

</form></div>