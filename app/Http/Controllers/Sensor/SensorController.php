<?php

namespace App\Http\Controllers\Sensor;

use App\Http\Controllers\Controller;
use App\Models\Sensor\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensorList = Sensor::all();
        return response()->json([
            'message' => 'sensor has been retrieved',
            'data' => $sensorList,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newSensor = new Sensor();
        $newSensor->name = "sensor name";
        $newSensor->status = "online";
        $newSensor->save();

        return response()->json([
            'message' => 'sensor has been created',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
    public function update(Request $request, Sensor $sensor)
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
