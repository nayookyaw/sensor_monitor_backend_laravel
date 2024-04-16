<?php

namespace App\Repositories;

use App\Interfaces\SensorRepositoryInterface;
use App\Models\Sensor;

class SensorRepository implements SensorRepositoryInterface
{
    public function index(){
        return Sensor::all();
    }

    public function getById($id){
       return Sensor::find($id);
    }

    public function create(Sensor $newSensor){
       return $newSensor->save();
    }

    public function update(Sensor $updateSensor) {
       return $updateSensor->save();
    }
    
    public function delete($id){
        Sensor::destroy($id);
    }
}
