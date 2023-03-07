<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbsenceRequest;
use App\Http\Requests\UpdateAbsenceRequest;
use App\Models\Absence;
use App\Repositories\Interfaces\AbsenceInterface;

class AbsenceController extends Controller
{
    private $absenceInterface;

    public function __construct(AbsenceInterface $absenceInterface)
    {
        $this->absenceInterface = $absenceInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->absenceInterface->allAbsences();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbsenceRequest $request)
    {
        return $this->absenceInterface->storeAbsence($request->toArray());

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->absenceInterface->findAbsence($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsenceRequest $request, int $id)
    {
        return $this->absenceInterface->updateAbsence($request->toArray(),$id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return $this->absenceInterface->destroyAbsence($id);

    }
}
