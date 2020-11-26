<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Marcas
 * @package App\Models
 * @version November 18, 2020, 1:10 pm UTC
 *
 * @property string $nombre
 */
class Marcas extends Model
{

    public $table = 'Marcas';
    



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
