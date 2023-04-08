@extends('plantilla')

@section('content')
	<h2 class="text-center m-3">Productos</h2>

	<form action="{{ route('productos.store') }}" method="post" class="w-50 shadow my-3 mx-auto p-3">
		@csrf
		Nombre: <input type="text" name="nombre" class="form-control my-2">
		Precio: <input type="number" name="precio" class="form-control my-2">
		Descripción:
		<textarea name="descripcion" class="form-control my-2">
			
		</textarea>
		<input type="submit" class="btn btn-primary" value="Guardar">
	</form>
@endsection