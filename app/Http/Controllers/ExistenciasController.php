<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExistenciasRequest;
use App\Http\Requests\UpdateExistenciasRequest;
use App\Repositories\ExistenciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ExistenciasController extends AppBaseController
{
    /** @var  ExistenciasRepository */
    private $existenciasRepository;

    public function __construct(ExistenciasRepository $existenciasRepo)
    {
        $this->existenciasRepository = $existenciasRepo;
    }

    /**
     * Display a listing of the Existencias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $existencias = $this->existenciasRepository->paginate(10);

        return view('existencias.index')
            ->with('existencias', $existencias);
    }

    /**
     * Show the form for creating a new Existencias.
     *
     * @return Response
     */
    public function create()
    {
        return view('existencias.create');
    }

    /**
     * Store a newly created Existencias in storage.
     *
     * @param CreateExistenciasRequest $request
     *
     * @return Response
     */
    public function store(CreateExistenciasRequest $request)
    {
        $input = $request->all();

        $existencias = $this->existenciasRepository->create($input);

        Flash::success('Existencias saved successfully.');

        return redirect(route('existencias.index'));
    }

    /**
     * Display the specified Existencias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $existencias = $this->existenciasRepository->find($id);

        if (empty($existencias)) {
            Flash::error('Existencias not found');

            return redirect(route('existencias.index'));
        }

        return view('existencias.show')->with('existencias', $existencias);
    }

    /**
     * Show the form for editing the specified Existencias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $existencias = $this->existenciasRepository->find($id);

        if (empty($existencias)) {
            Flash::error('Existencias not found');

            return redirect(route('existencias.index'));
        }

        return view('existencias.edit')->with('existencias', $existencias);
    }

    /**
     * Update the specified Existencias in storage.
     *
     * @param int $id
     * @param UpdateExistenciasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExistenciasRequest $request)
    {
        $existencias = $this->existenciasRepository->find($id);

        if (empty($existencias)) {
            Flash::error('Existencias not found');

            return redirect(route('existencias.index'));
        }

        $existencias = $this->existenciasRepository->update($request->all(), $id);

        Flash::success('Existencias updated successfully.');

        return redirect(route('existencias.index'));
    }

    /**
     * Remove the specified Existencias from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $existencias = $this->existenciasRepository->find($id);

        if (empty($existencias)) {
            Flash::error('Existencias not found');

            return redirect(route('existencias.index'));
        }

        $this->existenciasRepository->delete($id);

        Flash::success('Existencias deleted successfully.');

        return redirect(route('existencias.index'));
    }
}
