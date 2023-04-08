@extends('plantilla')

@section('content')
	<h2 class="text-center m-3">Productos</h2>

	<form action="{{ route('productos.update',$producto) }}" method="post" class="w-50 shadow my-3 mx-auto p-3">
		@csrf
		@method('PUT')
		Nombre: <input type="text" name="nombre" class="form-control my-2" value="{{ $producto->nombre }}">
		Precio: <input type="text" name="precio" class="form-control my-2" value="{{ $producto->precio }}">
		Descripción:
		<textarea name="descripcion" class="form-control my-2">
			{{ $producto->descripcion }}
		</textarea>
		<input type="submit" class="btn btn-primary" value="Guardar">
	</form>
@endsection