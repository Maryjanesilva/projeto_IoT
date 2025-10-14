<style>
    /* ... (Mantenha o CSS existente para o design de fundo e cards) ... */
    
    /* Novo CSS para o Toggle Switch */
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Esconde o checkbox padrão */
    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* Slider do switch */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #f08080; /* Vermelho claro para desligado */
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    /* Estilos quando o switch está ligado */
    .toggle-switch input:checked + .slider {
        background-color: #89c994; /* Verde claro para ligado */
    }

    .toggle-switch input:checked + .slider:before {
        transform: translateX(26px);
    }

    /* FIM do novo CSS */

    /* ... (Mantenha os outros estilos que já funcionavam) ... */
    
    body {
        background-color: #f0f8ff; /* Azul pálido */
        font-family: 'Comic Sans MS', 'Arial', sans-serif;
        color: #555;
    }

    .container {
        max-width: 900px;
    }

    /* Estilização do card */
    .card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .card-header {
        background-color: transparent;
        border-bottom: none;
        text-align: center;
        margin-bottom: 20px;
    }

    .card-header h2 {
        font-size: 2.5rem;
        color: #6a9bd8; /* Azul escuro */
        font-weight: bold;
    }

    /* Estilização da tabela */
    .table {
        background-color: #e6f2ff; /* Fundo da tabela azul claro */
        border-radius: 15px;
        overflow: hidden;
        border-collapse: collapse;
        width: 100%;
    }

    .table thead tr {
        background-color: #6a9bd8; /* Cabeçalho azul escuro */
        color: white;
    }

    .table th, .table td {
        padding: 15px;
        text-align: center;
        border: none;
    }

    .table tbody tr:nth-child(even) {
        background-color: #dbe9f5; 
    }

    .table tbody tr:hover {
        background-color: #cce0f0; 
    }

    .badge {
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: bold;
    }

    .bg-success {
        background-color: #89c994; /* Verde suave */
    }

    .bg-danger {
        background-color: #f08080; /* Vermelho suave */
    }
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination-container > nav {
        margin: 0 auto;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Status dos Sensores</h2>
        </div>
        <div class="card-body">
            @if ($sensores->isEmpty())
                <p class="text-center" style="color: #6a9bd8;">Nenhum sensor cadastrado ou disponível.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th> 
                            <th>Codigo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sensores as $sensor)
                            <tr>
                                <td>{{ $sensor->id }}</td>
                                <td>{{ $sensor->tipo }}</td> 
                                 <td>{{ $sensor->codigo }}</td> 
                                <td>
                                    <label class="toggle-switch">
                                        <input type="checkbox"
                                            wire:click="toggleStatus({{ $sensor->id }})"
                                            {{ ($sensor->status == 'ativo' || $sensor->status == 1) ? 'checked' : '' }}
                                        />
                                        <span class="slider"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>