<?php

namespace App\Livewire\Sensor;

use Livewire\Component;

class SensorCreate extends Component
{

    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    
    public function render()
    {
        return view('livewire.sensor.sensor-create');
    }
}
