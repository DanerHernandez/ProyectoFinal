<?php

namespace App\Repositories;

use App\Models\Productos;
use App\Repositories\BaseRepository;

/**
 * Class ProductosRepository
 * @package App\Repositories
 * @version November 19, 2020, 12:43 am UTC
*/

class ProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'marca',
        'precio',
        'cantidad',
        'categoria_id',
        'proveedor_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Productos::class;
    }
}
