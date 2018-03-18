<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //

    /**
     * Un pedido tiene uno o más productos.
     */
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

    /**
     * Un pedido es de un y solo de un cliente.
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }


}
