<?php

namespace App\Repositories;

use App\Models\Pedidos;
use App\Repositories\BaseRepository;

/**
 * Class PedidosRepository
 * @package App\Repositories
 * @version November 19, 2020, 1:36 am UTC
*/

class PedidosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'producto_id',
        'cliente_id',
        'empleado_id'
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
        return Pedidos::class;
    }
}
