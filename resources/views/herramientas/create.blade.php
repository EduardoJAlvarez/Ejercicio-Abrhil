<!-- Esta es la ventana que utilizaremos para crear un nuevo registro de los productos que hay en existencia y,
el administrador puede modificar, utilizaremos un formulario ya creado para reducir el codigo-->
<form action="{{url('/herramientas')}}" method="POST">
{{csrf_field()}}
<!-- Aqui incluimos el formulario -->
@include('herramientas.form', ['Modo'=>'crear'])
</form>
