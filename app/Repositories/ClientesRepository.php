<?php

namespace App\Repositories;

use App\Models\Clientes;
use App\Repositories\BaseRepository;

/**
 * Class ClientesRepository
 * @package App\Repositories
 * @version November 19, 2020, 1:02 am UTC
*/

class ClientesRepository extends BaseRepository
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
        return Clientes::class;
    }
}
