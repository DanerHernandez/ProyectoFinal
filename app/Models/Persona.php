<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Persona
 * @package App\Models
 * @version October 15, 2020, 6:41 pm UTC
 *
 * @property string $nombre
 */
class Persona extends Model
{

    public $table = 'Persona';
    



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
