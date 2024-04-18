<?php

namespace App\Interfaces;

use App\Models\Sensor;

interface SensorRepositoryInterface
{
    public function index();
    public function getById(int $id);
    public function create(Sensor $newSensor);
    public function update(Sensor $updateSensor);
    public function delete(int $id);
}
