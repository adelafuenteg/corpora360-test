<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
});

/*
 * Clientes
*/
Route::get('/clientes', function () {

    $clientes = App\Cliente::all();

    return view('clientes.clientes', compact('clientes'));
});

Route::get('/clientes/editar/{cliente}', function ($id) {

    $cliente = DB::table('clientes')->where('cliente_id', $id)->first();

    return view('clientes.edit', compact('cliente'));
});

Route::get('/clientes/nuevo', function () {

    return view('clientes.create');
    
});

Route::post('/clientes/nuevo','Controller@insertarCliente');

Route::post('/clientes/editar','Controller@editarCliente');

// Métodos para la API, devuelven JSON
Route::get('/api/clientes', function () {

    $clientes = App\Cliente::all();

    return $clientes;
});

Route::get('/api/clientes/{cliente}', function ($id) {

    $cliente = DB::table('clientes')->where('cliente_id', $id)->first();

    return dd($cliente);
});

/*
 * Productos
*/
Route::get('/productos', function () {

    $productos = App\Producto::all();

    return view('productos.productos', compact('productos'));
});

Route::get('/productos/editar/{producto}', function ($id) {

    $producto = DB::table('productos')->where('producto_id', $id)->first();

    return view('productos.edit', compact('producto'));
});

Route::get('/productos/nuevo', function () {

    return view('productos.create');
});

Route::post('/productos/nuevo','Controller@insertarProducto');

Route::post('/productos/editar','Controller@editarProducto');

// Métodos para la API, devuelven JSON
Route::get('/api/productos', function () {

    $productos = App\Producto::all();

    return $productos;
});

Route::get('/api/productos/{producto}', function ($id) {

    $producto = DB::table('productos')->where('producto_id', $id)->first();

    return dd($producto);
});


/*
 * Pedidos
*/
Route::get('/pedidos', function () {

    $pedidos = App\Pedido::all();

    return view('pedidos.pedidos', compact('pedidos'));
});

Route::get('/pedidos/editar/{pedido}', function ($id) {

    $pedido = DB::table('pedidos')->where('pedido_id', $id)->first();
    $clientes = App\Cliente::all();

    return view('pedidos.edit', compact('pedido','clientes'));
});

Route::get('/pedidos/nuevo', function () {

    $clientes = App\Cliente::all();

    return view('pedidos.create', compact('clientes'));
});

Route::post('/pedidos/nuevo','Controller@insertarPedido');

Route::post('/pedidos/editar','Controller@editarPedido');

// Métodos para la API, devuelven JSON
Route::get('/api/pedidos', function () {

    $pedidos = App\Pedido::all();

    return $pedidos;
});

Route::get('/api/pedidos/{pedido}', function ($id) {

    $pedido = DB::table('pedidos')->where('pedido_id', $id)->first();

    return dd($pedido);
});