<!--En esta ventana nos ayudara interectuar con los datos que deseamos actulizar de los productos devueltos
obtendremos sus valores apartir de su id -->
<div class="contaneir">
<form action="{{url('/devueltos/'.$devuelto->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PATCH')}}
    @include('devueltos.form', ['Modo'=>'editar'])

</form></div>