<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * Acciones sobre Cliente
    */ 
    function insertarCliente(Request $req) {

        $nombre = $req->input('nombre');
        $data = array('nombre'=>$nombre);

        DB::table('clientes')->insert($data);

        return redirect('/clientes');
    }

    function editarCliente(Request $req) {

        $cliente_id = $req->input('cliente_id');
        $nombre = $req->input('nombre');
        $data = array('nombre'=>$nombre);

        DB::table('clientes')->where('cliente_id',$cliente_id)->update($data);

        return redirect('/clientes');
    }

    /*
     * Acciones sobre Producto
    */ 
    function insertarProducto(Request $req) {

        $nombre = $req->input('nombre');
        $precio = $req->input('precio');
        $data = array('nombre'=>$nombre,'precio'=>$precio);

        DB::table('productos')->insert($data);

        return redirect('/productos');
    }

    function editarProducto(Request $req) {

        $producto_id = $req->input('producto_id');
        $nombre = $req->input('nombre');
        $precio = $req->input('precio');
        $data = array('nombre'=>$nombre,'precio'=>$precio);

        DB::table('productos')->where('producto_id',$producto_id)->update($data);

        return redirect('/productos');
    }

    /*
     * Acciones sobre Pedido
    */ 
    function insertarPedido(Request $req) {

        $fecha_creacion = $req->input('fecha_creacion');
        $id_cliente = $req->input('id_cliente');
        $importe = $req->input('importe');
        $data = array('fecha_creacion'=>$fecha_creacion,'id_cliente'=>$id_cliente,'importe'=>$importe);

        DB::table('pedidos')->insert($data);

        return redirect('/pedidos');
    }

    function editarPedido(Request $req) {

        $pedido_id = $req->input('pedido_id');
        $fecha_creacion = $req->input('fecha_creacion');
        $id_cliente = $req->input('id_cliente');
        $importe = $req->input('importe');
        $data = array('fecha_creacion'=>$fecha_creacion,'id_cliente'=>$id_cliente,'importe'=>$importe);

        DB::table('pedidos')->where('pedido_id',$pedido_id)->update($data);

        return redirect('/pedidos');
    }
}
