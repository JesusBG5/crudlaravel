@extends('plantilla')

@section('content')
	<h2 class="text-center m-3">Productos</h2>

	@if (session('mensaje'))
		<div class="alert alert-success">
		{{ session('mensaje') }}
		</div>
	@endif

	<a href="{{ route('productos.create') }}">
		<button class="btn btn-primary">Agregar</button>
	</a>

	<table class="table table-light w-75 mx-auto">
		<tr class="table table-dark">
			<th>Nombre</th>
			<th>Precio</th>
			<th>Descripción</th>
			<th colspan="2">Operaciones</th>
		</tr>
	@foreach ($productos as $producto)
		<tr>
			<td>{{ $producto->nombre }}</td>
			<td>{{ $producto->precio }}</td>
			<td>{{ $producto->descripcion }}</td>
			<td>  
				<form method="post" action="{{ route('productos.destroy',$producto) }}">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar el producto?')">
						<i class="fa-solid fa-trash"></i>
					</button>
				</form>
			</td>
			<td>
				<form method="get" action="{{ route('productos.edit',$producto) }}">
					<button type="submit" class="btn btn-warning">
						<i class="fa-solid fa-edit"></i>
					</button>
				</form>
			</td>
		</tr>
	@endforeach
	</table>
@endsection