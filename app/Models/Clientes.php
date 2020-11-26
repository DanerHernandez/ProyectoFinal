<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clientes
 * @package App\Models
 * @version November 19, 2020, 1:02 am UTC
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 */
class Clientes extends Model
{

    public $table = 'Clientes';
    



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
