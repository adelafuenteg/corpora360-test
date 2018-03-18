@extends('template.main')

@section('title')
Prueba técnica
@endsection

@section('content')

<!-- Page Content -->
<br/><br/>
<div class="container">

<div class="row">

  <div class="col-lg-3">
  <br/>
    <div class="list-group">
      <a href="../clientes" class="list-group-item">Clientes</a>
      <a href="#" class="list-group-item active">Productos</a>
      <a href="../pedidos" class="list-group-item">Pedidos</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <br/>
    <div class="row">
    <a href="/productos/nuevo" class="btn btn-primary">Añadir nuevo producto</a>
    </div>
    <br/>
    <div class="row">
      
      <table class="display data-tables table table-stripped" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($productos as $producto)

            
            <tr>
                <td>{{ $producto->producto_id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td><a class="btn btn-success" href="/productos/editar/{{ $producto->producto_id }}">Editar</a></td>
            </tr>

            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </tfoot>
    </table>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection
