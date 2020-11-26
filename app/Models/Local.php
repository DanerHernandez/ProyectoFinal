<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Local
 * @package App\Models
 * @version November 19, 2020, 1:12 am UTC
 *
 * @property string $nombre
 * @property string $nit
 * @property string $direccion
 * @property string $telefono
 */
class Local extends Model
{

    public $table = 'Local';
    



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
