<?php

namespace App\Repositories;

use App\Models\Marcas;
use App\Repositories\BaseRepository;

/**
 * Class MarcasRepository
 * @package App\Repositories
 * @version November 18, 2020, 1:10 pm UTC
*/

class MarcasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Marcas::class;
    }
}
