<?php

namespace App\Repositories;

use App\Models\Detalle venta;
use App\Repositories\BaseRepository;

/**
 * Class Detalle ventaRepository
 * @package App\Repositories
 * @version November 18, 2020, 4:53 pm UTC
*/

class Detalle ventaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pedido_id',
        'total'
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
        return Detalle venta::class;
    }
}
