<?php

namespace App\Repositories;

use App\Models\Detalle_de_pedido;
use App\Repositories\BaseRepository;

/**
 * Class Detalle_de_pedidoRepository
 * @package App\Repositories
 * @version November 19, 2020, 3:30 pm UTC
*/

class Detalle_de_pedidoRepository extends BaseRepository
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
        return Detalle_de_pedido::class;
    }
}
