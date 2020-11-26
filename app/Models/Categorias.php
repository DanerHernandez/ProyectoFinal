<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorias
 * @package App\Models
 * @version November 18, 2020, 1:08 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 */
class Categorias extends Model
{

    public $table = 'Categorias';
    



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
