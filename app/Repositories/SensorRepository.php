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
       return Sensor::findOrFail($id);
    }

    public function store(array $data){
       return Sensor::create($data);
    }

    public function update(array $data,$id){
       return Sensor::whereId($id)->update($data);
    }
    
    public function delete($id){
        Sensor::destroy($id);
    }
}
