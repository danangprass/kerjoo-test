<?php
namespace App\Repositories\Interfaces;

interface AbsenceInterface {
    public function allAbsences();
    public function storeAbsence($data);
    public function findAbsence(int $id);
    public function updateAbsence($data, int $id);
    public function destroyAbsence(int $id);
}
