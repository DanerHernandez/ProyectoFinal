<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Productos
 * @package App\Models
 * @version November 19, 2020, 12:43 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $categorias
 * @property \Illuminate\Database\Eloquent\Collection $proveedores
 * @property string $nombre
 * @property string $marca
 * @property number $precio
 * @property string $cantidad
 * @property integer $categoria_id
 * @property integer $proveedor_id
 */
class Productos extends Model
{

    public $table = 'Productos';
    



    public $fillable = [
        'nombre',
        'marca',
        'precio',
        'cantidad',
        'categoria_id',
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
        'marca' => 'string',
        'precio' => 'double',
        'cantidad' => 'string',
        'categoria_id' => 'integer',
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
    public function categorias()
    {
        return $this->hasMany(\App\Models\categorias::class, 'id', 'categoria_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function proveedores()
    {
        return $this->hasMany(\App\Models\proveedores::class, 'id', 'proveedor_id');
    }
}
