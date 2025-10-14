<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorStatus extends Component
{

      public function list()
    {
        return Sensor::all();
    }

    public function render()
    { 
        return view('livewire.sensor.sensor-status',[
          'sensores' => $this->list() 
        ]);
    }
}
