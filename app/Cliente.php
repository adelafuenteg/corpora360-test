<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //

    /**
     * Un cliente puede tener más de un pedido.
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
