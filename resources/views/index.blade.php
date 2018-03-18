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
      <a href="clientes" class="list-group-item">Clientes</a>
      <a href="productos" class="list-group-item">Productos</a>
      <a href="pedidos" class="list-group-item">Pedidos</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
  <br/>
    <h2>Prueba técnica Corpora360</h2>
            <p class="lead">Características:</p>
            
            <ul>
              <li>Laravel 5.6.12</li>
              <li>Bootstrap 4</li>
              <li>MySQL</li>
            </ul>

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection
