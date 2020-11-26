<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pedidos
 * @package App\Models
 * @version November 19, 2020, 1:36 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 * @property \Illuminate\Database\Eloquent\Collection $empleados
 * @property integer $producto_id
 * @property integer $cliente_id
 * @property integer $empleado_id
 */
class Pedidos extends Model
{

    public $table = 'Pedidos';
    



    public $fillable = [
        'producto_id',
        'cliente_id',
        'empleado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'producto_id' => 'integer',
        'cliente_id' => 'integer',
        'empleado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\productos::class, 'id', 'producto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\clientes::class, 'id', 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empleados()
    {
        return $this->hasMany(\App\Models\empleados::class, 'id', 'empleado_id');
    }
}
