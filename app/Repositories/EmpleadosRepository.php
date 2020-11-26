<?php

namespace App\Repositories;

use App\Models\Empleados;
use App\Repositories\BaseRepository;

/**
 * Class EmpleadosRepository
 * @package App\Repositories
 * @version November 19, 2020, 12:59 am UTC
*/

class EmpleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono'
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
        return Empleados::class;
    }
}
