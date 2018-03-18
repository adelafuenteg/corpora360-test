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
     * Un cliente puede tener más de un pedido.
     */
    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }


}
