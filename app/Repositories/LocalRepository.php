<?php

namespace App\Repositories;

use App\Models\Local;
use App\Repositories\BaseRepository;

/**
 * Class LocalRepository
 * @package App\Repositories
 * @version November 19, 2020, 1:12 am UTC
*/

class LocalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nit',
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
        return Local::class;
    }
}
