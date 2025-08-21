<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
   public $temperatura;
   public $luminosidade;
   public $umidade;
   public $ultimoRegistro;

   public $labelsTemperatura = [];
   public $dadosTemperatura  = [];

   public $labelSensores = [];
   public $dadosSensores = [];

   public function carregarDados(){
    
   }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
