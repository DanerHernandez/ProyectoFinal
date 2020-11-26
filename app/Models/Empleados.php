<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Empleados
 * @package App\Models
 * @version November 19, 2020, 12:59 am UTC
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 */
class Empleados extends Model
{

    public $table = 'Empleados';
    



    public $fillable = [
        'nombre',
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
