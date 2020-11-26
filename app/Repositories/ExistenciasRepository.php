<?php

namespace App\Repositories;

use App\Models\Existencias;
use App\Repositories\BaseRepository;

/**
 * Class ExistenciasRepository
 * @package App\Repositories
 * @version November 19, 2020, 12:56 am UTC
*/

class ExistenciasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'producto_id',
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
        return Existencias::class;
    }
}
