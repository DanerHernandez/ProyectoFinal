<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalle_pedidoRequest;
use App\Http\Requests\UpdateDetalle_pedidoRequest;
use App\Repositories\Detalle_pedidoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detalle_pedidoController extends AppBaseController
{
    /** @var  Detalle_pedidoRepository */
    private $detallePedidoRepository;

    public function __construct(Detalle_pedidoRepository $detallePedidoRepo)
    {
        $this->detallePedidoRepository = $detallePedidoRepo;
    }

    /**
     * Display a listing of the Detalle_pedido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detallePedidos = $this->detallePedidoRepository->paginate(10);

        return view('detalle_pedidos.index')
            ->with('detallePedidos', $detallePedidos);
    }

    /**
     * Show the form for creating a new Detalle_pedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_pedidos.create');
    }

    /**
     * Store a newly created Detalle_pedido in storage.
     *
     * @param CreateDetalle_pedidoRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalle_pedidoRequest $request)
    {
        $input = $request->all();

        $detallePedido = $this->detallePedidoRepository->create($input);

        Flash::success('Detalle Pedido saved successfully.');

        return redirect(route('detallePedidos.index'));
    }

    /**
     * Display the specified Detalle_pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        return view('detalle_pedidos.show')->with('detallePedido', $detallePedido);
    }

    /**
     * Show the form for editing the specified Detalle_pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        return view('detalle_pedidos.edit')->with('detallePedido', $detallePedido);
    }

    /**
     * Update the specified Detalle_pedido in storage.
     *
     * @param int $id
     * @param UpdateDetalle_pedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalle_pedidoRequest $request)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        $detallePedido = $this->detallePedidoRepository->update($request->all(), $id);

        Flash::success('Detalle Pedido updated successfully.');

        return redirect(route('detallePedidos.index'));
    }

    /**
     * Remove the specified Detalle_pedido from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        $this->detallePedidoRepository->delete($id);

        Flash::success('Detalle Pedido deleted successfully.');

        return redirect(route('detallePedidos.index'));
    }
}
