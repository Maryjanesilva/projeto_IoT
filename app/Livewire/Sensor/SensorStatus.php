<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SensorStatus extends Component
{

public $searchTerm = '';
public $esp32_ip = 'http://192.168.0.120'; 


    public function render()
    { 
       $query = Sensor::query();

        if (!empty($this->searchTerm)) {
            $query->where(function ($q) {
                $q->where('tipo', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('codigo', 'like', '%' . $this->searchTerm . '%');
            });
        }

        $sensores = $query->orderBy('id', 'asc')->get();


        return view('livewire.sensor.sensor-status', [
            'sensores' => $sensores
        ]);
    }
    public function search()
    {
        // Só atualiza a tela (Livewire faz o resto automaticamente)
    }

    public function toggleStatus($sensorId)
    {
        $sensor = Sensor::findOrFail($sensorId);

        // Alterna status
        $novoStatus = ($sensor->status === 'ativo' || $sensor->status == 1) ? 'inativo' : 'ativo';
        $sensor->status = $novoStatus;
        $sensor->save();

        // 🔹 Envia comando ao ESP32
        try {
            Http::get("{$this->esp32_ip}/toggle", [
                'status' => $novoStatus
            ]);
        } catch (\Exception $e) {
            session()->flash('success', 'Status alterado, mas o ESP32 não respondeu.');
            return;
        }

        session()->flash('success', "Sensor #{$sensor->id} agora está {$novoStatus}.");
    }
}
