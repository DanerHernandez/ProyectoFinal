<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Existencias
 * @package App\Models
 * @version November 19, 2020, 12:56 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property \Illuminate\Database\Eloquent\Collection $proveedores
 * @property string $nombre
 * @property integer $producto_id
 * @property integer $proveedor_id
 */
class Existencias extends Model
{

    public $table = 'Existencias';
    



    public $fillable = [
        'nombre',
        'producto_id',
        'proveedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'producto_id' => 'integer',
        'proveedor_id' => 'integer'
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
    public function proveedores()
    {
        return $this->hasMany(\App\Models\proveedores::class, 'id', 'proveedor_id');
    }
}
