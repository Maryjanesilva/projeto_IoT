<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class Sensorlist extends Component
{
    public $perPage = 15;

    protected $queryString = [
        'perPage' => ['except' => 15]
    ];

    public function render()
    {
         $sensor = Sensor::all();
        return view('livewire.sensor.sensorlist', compact('sensor'));
    }
}
