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
      <a href="../clientes" class="list-group-item active">Clientes</a>
      <a href="../productos" class="list-group-item">Productos</a>
      <a href="#" class="list-group-item">Pedidos</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
    <br/>
    <div class="row">
        <h2>Nuevo pedido</h2>
    </div>
    <div class="row">

    <form action="/pedidos/nuevo" method="post" class="form-horizontal">
    
        <div class="form-group">
            {{ csrf_field() }}
            <label for="fecha_creacion">Fecha creación</label>
            <input type="date" name="fecha_creacion" class="form-control">
        </div>

        <div class="form-group">
        <label for="id_cliente">Id. cliente</label>
        <select class="form-control" id="id_cliente" name="id_cliente">

            @foreach ($clientes as $cliente)

            <option>{{ $cliente->cliente_id }}</option>
            
            @endforeach

        </select>
        </div>
        
        <div class="form-group">
            <label for="importe">Importe</label>
            <input type="text" name="importe" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="A&ntilde;adir" class="btn btn-primary">
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
