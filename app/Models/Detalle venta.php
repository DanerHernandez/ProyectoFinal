<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Detalle venta
 * @package App\Models
 * @version November 18, 2020, 4:53 pm UTC
 *
 * @property \App\Models\pedidos $pedidos
 * @property integer $pedido_id
 * @property string $total
 */
class Detalle venta extends Model
{

    public $table = 'Detalle venta';
    



    public $fillable = [
        'pedido_id',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pedido_id' => 'integer',
        'total' => 'string'
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
    public function pedidos()
    {
        return $this->hasOne(\App\Models\pedidos::class, 'id', 'pedido_id');
    }
}
