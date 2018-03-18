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
      <a href="#" class="list-group-item active">Clientes</a>
      <a href="../productos" class="list-group-item">Productos</a>
      <a href="../pedidos" class="list-group-item">Pedidos</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
    <br/>
    <div class="row">
        <a href="/clientes/nuevo" class="btn btn-primary">Añadir nuevo cliente</a>
    </div>
    <br/>
    <div class="row">

      <table class="display data-tables table table-stripped" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($clientes as $cliente)

            <tr>
                <td>{{ $cliente->cliente_id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td><a class="btn btn-success" href="/clientes/editar/{{ $cliente->cliente_id }}">Editar</a></td>
            </tr>
            
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
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
