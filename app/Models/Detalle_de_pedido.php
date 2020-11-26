<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Detalle_de_pedido
 * @package App\Models
 * @version November 19, 2020, 3:30 pm UTC
 *
 * @property \App\Models\Productos $productos
 * @property \App\Models\Pedidos $pedidos
 * @property integer $producto_id
 * @property integer $pedido_id
 */
class Detalle_de_pedido extends Model
{

    public $table = 'detalle_de_pedido';
    



    public $fillable = [
        'producto_id',
        'pedido_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'producto_id' => 'integer',
        'pedido_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function productos()
    {
        return $this->hasOne(\App\Models\Productos::class, 'id', 'producto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function pedidos()
    {
        return $this->hasOne(\App\Models\Pedidos::class, 'id', 'pedido_id');
    }
}
