<?php

namespace App\Livewire\Auth;

use App\Models\Ambiente;
use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class Login extends Component
{
      public $email;
    public $password;

    // Adicione as regras de validação como propriedades
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        // 1. Execute a validação antes de tentar o login
        $this->validate();

        // 2. Tente autenticar usando a fachada Auth CORRETA
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // A autenticação foi bem-sucedida.
            
            session()->regenerate();
            
            // O redirecionamento DEVE funcionar agora
            return redirect()->route('dashboard');
            
        } else {
            // A autenticação falhou.
            session()->flash('error', 'Credenciais incorretas');
        }
    }

    public function render()
    {
        return view('livewire.auth.login') ;
    }
}
