<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome, $descricao, $status, $ambienteId;

    public function mount($id)
    {
        $ambientes = Ambiente::find($id);

        if ($ambientes == null) {
            return redirect()->route('ambiente.list');
        }

        $this->ambienteId = $ambientes->id;
        $this->nome = $ambientes->nome;
        $this->descricao = $ambientes->descricao;
        $this->status = $ambientes->status;
    }

    
    public function salvar()
    {
        $ambientes = Ambiente::find($this->ambienteId);

        $ambientes->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        return redirect()->route('ambiente.list');
    }


    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}