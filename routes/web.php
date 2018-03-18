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

    $name = 'Álex';

    return view('index', compact('name'));
});


Route::get('/pedidos', function () {

    $pedidos = App\Pedido::all();

    return view('index', compact('pedidos'));
});