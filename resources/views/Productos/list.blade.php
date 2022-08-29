@extends('plantilla')

@section('contenido')
<br>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th> DESCRIPCION</th>
                    <th>CANTIDAD</th>
                    <th>FECHA</th>
                    <th>ACCIONES</th>

                  </tr>
                  </thead>
                <tbody>
                 @foreach ($produc as $product)
                 <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nombre }}</td>
                    <td>Q. {{ $product->precio }}</td>
                    <td>{{ $product->descripcion }}</td>
                    <td>{{ $product->cantidad }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
</td>
</tr>
@endforeach
                </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th> DESCRIPCION</th>
                    <th>CANTIDAD</th>
                    <th>FECHA</th>
                    <th>ACCIONES</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>













@endsection