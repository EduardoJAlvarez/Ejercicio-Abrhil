<!--En esta ventana nos ayudara interectuar con los datos que deseamos actulizar de los productos vendidos al cliente,
obtendremos sus valores apartir de su id -->
<div class="contaneir">
<form action="{{url('/vender/'.$venta->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PATCH')}}
    @include('vender.form', ['Modo'=>'editar'])

</form></div>