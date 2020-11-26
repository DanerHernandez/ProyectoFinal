<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePersonaAPIRequest;
use App\Http\Requests\API\UpdatePersonaAPIRequest;
use App\Models\Persona;
use App\Repositories\PersonaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PersonaController
 * @package App\Http\Controllers\API
 */

class PersonaAPIController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $personaRepository;

    public function __construct(PersonaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the Persona.
     * GET|HEAD /personas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $personas = $this->personaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($personas->toArray(), 'Personas retrieved successfully');
    }

    /**
     * Store a newly created Persona in storage.
     * POST /personas
     *
     * @param CreatePersonaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaAPIRequest $request)
    {
        $input = $request->all();

        $persona = $this->personaRepository->create($input);

        return $this->sendResponse($persona->toArray(), 'Persona saved successfully');
    }

    /**
     * Display the specified Persona.
     * GET|HEAD /personas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Persona $persona */
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            return $this->sendError('Persona not found');
        }

        return $this->sendResponse($persona->toArray(), 'Persona retrieved successfully');
    }

    /**
     * Update the specified Persona in storage.
     * PUT/PATCH /personas/{id}
     *
     * @param int $id
     * @param UpdatePersonaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Persona $persona */
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            return $this->sendError('Persona not found');
        }

        $persona = $this->personaRepository->update($input, $id);

        return $this->sendResponse($persona->toArray(), 'Persona updated successfully');
    }

    /**
     * Remove the specified Persona from storage.
     * DELETE /personas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Persona $persona */
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            return $this->sendError('Persona not found');
        }

        $persona->delete();

        return $this->sendSuccess('Persona deleted successfully');
    }
}
