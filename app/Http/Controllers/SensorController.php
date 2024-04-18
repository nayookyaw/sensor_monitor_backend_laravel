<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\CreateSensorRequest;
use App\Models\Sensor;
use App\Http\Requests\StoreSensorRequest;
use App\Http\Requests\UpdateSensorRequest;
use App\Http\Resources\SensorResource;
use App\Interfaces\SensorRepositoryInterface;
use Exception;

class SensorController extends Controller
{
    private SensorRepositoryInterface $sensorRepositoryInterface;

    public function __construct(SensorRepositoryInterface $productRepositoryInterface)
    {
        $this->sensorRepositoryInterface = $productRepositoryInterface;
    }

    public function index()
    {
        $sensorList = $this->sensorRepositoryInterface->index();

        return ApiResponseClass::sendResponse(SensorResource::collection($sensorList),'',200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSensorRequest $createSensor)
    {
        $newSensor = new Sensor();
        $newSensor->name = $createSensor->name;
        $newSensor->details = $createSensor->details;

        $this->sensorRepositoryInterface->create($newSensor);

        return ApiResponseClass::sendResponse(null,'new sensor has been stored',200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $sensorId)
    {
        try {
            $sensor = $this->sensorRepositoryInterface->getById($sensorId);
            if ($sensor) {
                return ApiResponseClass::sendResponse($sensor, 'sensor has be retrieved', 200);
            } else {
                return ApiResponseClass::sendResponse(null,'no data', 200);
            }
        } catch (Exception $e) {
            return ApiResponseClass::sendResponse(null, $e->getMessage(),500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSensorRequest $request, int $sensorId)
    {
        $existingSensor = $this->sensorRepositoryInterface->getById($sensorId);
        if ($existingSensor) {
            $existingSensor->name = $request->name;
            $existingSensor->details = $request->details;
            $this->sensorRepositoryInterface->update($existingSensor);

            return ApiResponseClass::sendResponse(null,'sensor has been updated',200);
        } else {
            return ApiResponseClass::sendResponse(null,'error in sensor update',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensor $sensor)
    {
        //
    }
}
