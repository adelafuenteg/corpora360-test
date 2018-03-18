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
        <h2>Nuevo cliente</h2>
    </div>
    <div class="row">

    <form action="/clientes/nuevo" method="post" class="form-horizontal">
    
        <div class="form-group">
            {{ csrf_field() }}
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control">
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
