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
      <a href="../productos" class="list-group-item">Productos</a>
      <a href="#" class="list-group-item active">Pedidos</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <br/>
    <div class="row">
        <a href="/pedidos/nuevo" class="btn btn-primary">Añadir nuevo pedido</a>
    </div>
    <br/>
    <div class="row">

      <table class="display data-tables table table-stripped" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Fecha de creaci&oacute;n</th>
                <th>Id Cliente</th>
                <th>Importe</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pedidos as $pedido)

            <tr>
                <td>{{ $pedido->pedido_id }}</td>
                <td>{{ $pedido->fecha_creacion }}</td>
                <td>{{ $pedido->id_cliente }}</td>
                <td>{{ $pedido->importe }}</td>
                <td><a class="btn btn-success" href="/pedidos/editar/{{ $pedido->pedido_id }}">Editar</a></td>
            </tr>
            
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Fecha de creaci&oacute;n</th>
                <th>Id Cliente</th>
                <th>Importe</th>
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
