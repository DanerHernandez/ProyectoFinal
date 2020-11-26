<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Proveedores
 * @package App\Models
 * @version November 18, 2020, 1:05 pm UTC
 *
 * @property string $nombre
 * @property string $nit
 * @property string $direccion
 * @property string $telefono
 */
class Proveedores extends Model
{

    public $table = 'Proveedores';
    



    public $fillable = [
        'nombre',
        'nit',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'nit' => 'string',
        'direccion' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
