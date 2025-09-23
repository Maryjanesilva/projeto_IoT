<?php

namespace App\Livewire\Registros;

use App\Models\Registro;
use Livewire\Component;
use Livewire\WithPagination;

class RegistrosIndex extends Component
{

    public $search = '';
    public $perPage = 10;

    public $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];


    public function render()
    {
         $registros = Registro::all();
        $registros = Registro::where('sensor_id', 'like', "%{$this->search}%")
        ->orwhere('unidade', 'like', "%{$this->search}%" )
        ->orwhere('data_hora', 'like', "%{$this->search}%")
        ->orwhere('valor', 'like', "%{$this->search}%")
        ->paginate($this->perPage);
        return view('livewire.registros.registros-index');
    }
}
