<?php

namespace App\Repositories;

use App\Models\Detalle_pedido;
use App\Repositories\BaseRepository;

/**
 * Class Detalle_pedidoRepository
 * @package App\Repositories
 * @version November 26, 2020, 8:54 am UTC
*/

class Detalle_pedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'producto_id',
        'pedido_id'
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
        return Detalle_pedido::class;
    }
}
