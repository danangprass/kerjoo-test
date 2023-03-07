<?php
namespace App\Repositories;

use App\Models\Absence;
use App\Repositories\Interfaces\AbsenceInterface;

class AbsenceRepository implements AbsenceInterface {
    public function allAbsences()
    {
        return Absence::with(['employee', 'approver'])->latest()->paginate(10);
    }

    public function storeAbsence($data)
    {
        // dd($data);
        return Absence::create($data);
    }

    public function findAbsence(int $id)
    {
        return Absence::with(['employee', 'approver'])->findOrFail($id);
    }

    public function updateAbsence($data, int $id)
    {
        $absence = Absence::where('id', $id)->first();
        $absence->update($data);

        return $absence;
    }

    public function destroyAbsence(int $id)
    {
        $absence = Absence::find($id);
        $absence->delete();

        return ['message' => 'Success delete'];
    }
}
