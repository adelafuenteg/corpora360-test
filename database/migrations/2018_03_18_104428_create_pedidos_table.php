<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('pedido_id');
            $table->date('fecha_creacion');
            $table->integer('id_cliente')->unsigned();
            $table->float('importe');
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('id_cliente')
                  ->references('cliente_id')->on('clientes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
