<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Models\Sensor;
use App\Http\Requests\StoreSensorRequest;
use App\Http\Requests\UpdateSensorRequest;
use App\Http\Resources\SensorResource;
use App\Interfaces\SensorRepositoryInterface;

class SensorController extends Controller
{
    private SensorRepositoryInterface $sensorRepositoryInterface;

    public function __construct(SensorRepositoryInterface $productRepositoryInterface)
    {
        $this->sensorRepositoryInterface = $productRepositoryInterface;
    }

    public function index()
    {
        $data = $this->sensorRepositoryInterface->index();

        return ApiResponseClass::sendResponse(SensorResource::collection($data),'',200);
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
    public function store(StoreSensorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensor $sensor)
    {
        //
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
    public function update(UpdateSensorRequest $request, Sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensor $sensor)
    {
        //
    }
}
