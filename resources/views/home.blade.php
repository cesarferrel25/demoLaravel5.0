@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Productos</div>
        <div class="panel-body">
					<table class="table table-hover">
  <thead>
    <tr>
      <th scope="row">CLAVE</th>
      <th scope="col">NOMBRE DEL PRODUCTO</th>
      <th scope="col">PRECIO $$</th>
      <th scope="col">DESCRIPCION CORTA DEL PRODUCTO</th>
    </tr>
  </thead>
  <tbody>
		@foreach($productos as $producto)
        <tr>
					  <th scope="row">{{ $producto->id }}</th>

          <!--  <td class="text-center">{{ $producto->id }}</td> -->
            <td class="text-center">{{ $producto->nombre }}</td>
            <td class="text-center">{{ $producto->precio }}</td>
            <td class="text-center">{{ $producto->descripcion }}</td>
        </tr>
    @endforeach
  </tbody>

</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
