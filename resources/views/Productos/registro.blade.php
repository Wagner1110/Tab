@extends('plantilla')

@section('contenido')
<form action="{{ route('productos.guardar') }}" method="POST"enctype="multipart/form-data">
    @csrf
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Nombre</label>
<input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Precio</label>
<input type="double" class="form-control" id="precio" name="precio" placeholder="">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Descripcion</label>
<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Cantidad</label>
<input type="double" class="form-control" id="cantidad" name="cantidad" placeholder="">
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</div>

@endsection