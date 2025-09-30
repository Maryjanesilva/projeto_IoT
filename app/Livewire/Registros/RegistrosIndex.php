<?php

namespace App\Livewire\Registros;

use App\Models\Registro;
use Livewire\Component;
use Livewire\WithPagination;

class RegistrosIndex extends Component
{

     public $sensor_id, $valor, $unidade, $data_hora;

     public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];


    public function render()
    {
         $registros = Registro::orderBy('id', 'desc')->get();
        $registros = Registro::where('id', 'like', "%{$this->search}%")
        ->paginate(15);
        return view('livewire.registros.registros-index', compact('registros'));
    }

    public function delete($id)
    {
        $registro = Registro::find($id);
        if ($registro != null) {
            $registro->delete();
        }

        session()->flash('success', 'registro deletado com sucesso.');
    }

}
