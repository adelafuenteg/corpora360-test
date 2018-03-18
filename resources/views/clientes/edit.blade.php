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
      <a href="/clientes" class="list-group-item active">Clientes</a>
      <a href="/productos" class="list-group-item">Productos</a>
      <a href="/pedidos" class="list-group-item">Pedidos</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
    <br/>
    <div class="row">
        <h2>Editar cliente ID: {{ $cliente->cliente_id }}</h2>
    </div>
    <div class="row">

    <form action="/clientes/editar" method="post" class="form-horizontal">
    
        <div class="form-group">
            {{ csrf_field() }}
            <input type="hidden" name="cliente_id" value="{{ $cliente->cliente_id }}">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}">
        </div>
        <div class="form-group">
            <input type="submit" value="Editar" class="btn btn-primary">
        </div>

    </form>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection
