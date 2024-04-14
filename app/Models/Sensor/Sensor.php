<?php

namespace App\Models\Sensor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    // use HasFactory;

    protected $table = 'sensors';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name', 'status'];
}
