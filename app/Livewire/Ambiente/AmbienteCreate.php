<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    protected $rules = [
        'nome' => 'required|min:2|max:255',
        'status' => 'required',
    ];

    protected $messages = [
        'nome.required' => 'O campo NOME é obrigatorio',
        'nome.min' => 'O campo NOME deve conter no mínimo 2 caracteres',
        'nome.max' => 'O campo NOME deve conter no máximo 255 caracteres',

        'status.required' => 'O campo STATUS é obrigatorio',
    ];

    public function store()
    {
        $this->validate();

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);
        session()->flash('success', 'Cadastro Realizado');
        return redirect()->route('ambiente.list');
        
    }

    public function render()
    {

        return view('livewire.ambiente.ambiente-create');
    }
}
