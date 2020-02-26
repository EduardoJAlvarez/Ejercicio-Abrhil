<!-- Esta es la ventana que utilizaremos para crear un nuevo registro de los productos devueltos,
utilizaremos un formulario ya creado para reducir el codigo-->
<form action="{{url('/devueltos')}}" method="POST">
{{csrf_field()}}

@include('devueltos.form', ['Modo'=>'crear'])
</form>
