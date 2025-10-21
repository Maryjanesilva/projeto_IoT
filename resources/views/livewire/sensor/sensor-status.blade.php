<style>
    /* === SEU CSS ORIGINAL (SEM ALTERAÇÕES) === */
    body {
        background-color: #f0f8ff;
        font-family: 'Comic Sans MS', 'Arial', sans-serif;
        color: #555;
        margin: 0;
        padding: 20px;
    }

    .container { max-width: 900px; margin: 0 auto; }
    .card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        padding: 30px;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover { transform: translateY(-5px); }
    .card-header { background-color: transparent; border-bottom: none; text-align: center; margin-bottom: 20px; }
    .card-header h2 {
        font-size: 2.5rem;
        color: #6a9bd8;
        font-weight: bold;
        position: relative;
        padding-bottom: 10px;
    }
    .card-header h2::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background-color: #6a9bd8;
        border-radius: 2px;
    }

    .search-input-group { display: flex; justify-content: center; margin-bottom: 20px; align-items: stretch; }
    .search-input-wrapper { position: relative; width: 100%; max-width: 400px; }
    .search-input {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 2px solid #6a9bd8;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
        background-color: #fff;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border-right: none;
    }
    .search-input:focus {
        outline: none;
        border-color: #5a85c4;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
    }

    .search-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6a9bd8;
        pointer-events: none;
        font-size: 1.2rem;
    }

    .search-button {
        padding: 12px 25px;
        border: 2px solid #6a9bd8;
        background-color: #6a9bd8;
        color: white;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease, border-color 0.3s ease;
        font-weight: bold;
        white-space: nowrap;
    }
    .search-button:hover { background-color: #5a85c4; border-color: #5a85c4; }

    .table {
        background-color: #e6f2ff;
        border-radius: 15px;
        overflow: hidden;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        animation: fadeIn 1s ease-in-out;
    }
    .table thead tr { background-color: #6a9bd8; color: white; }
    .table th, .table td { padding: 15px; text-align: center; border: none; vertical-align: middle; }
    .table tbody tr:nth-child(even) { background-color: #dbe9f5; }
    .table tbody tr:hover { background-color: #cce0f0; cursor: pointer; }

    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        margin: 0;
    }
    .toggle-switch input { opacity: 0; width: 0; height: 0; }
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #f08080;
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
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .toggle-switch input:checked + .slider { background-color: #89c994; }
    .toggle-switch input:checked + .slider:before { transform: translateX(26px); }
    .toggle-icons {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 8px;
        box-sizing: border-box;
        color: white;
        font-size: 14px;
        pointer-events: none;
        opacity: 0.8;
    }
    .toggle-icons .icon-on { display: none; }
    .toggle-switch input:checked ~ .slider .icon-on { display: block; }
    .toggle-switch input:checked ~ .slider .icon-off { display: none; }

    .flash-message {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #4CAF50;
        color: white;
        padding: 15px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        opacity: 0;
        animation: slideInAndOut 3s ease-in-out forwards;
    }

    @keyframes slideInAndOut {
        0% { opacity: 0; transform: translate(-50%, -50px); }
        10% { opacity: 1; transform: translate(-50%, 0); }
        90% { opacity: 1; transform: translate(-50%, 0); }
        100% { opacity: 0; transform: translate(-50%, -50px); }
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Status dos Sensores</h2>
        </div>
        <div class="card-body">

            <!-- Barra de Pesquisa -->
            <div class="search-input-group">
                <div class="search-input-wrapper">
                    <input 
                        type="text" 
                        class="search-input" 
                        placeholder="Pesquisar por nome ou código..."
                        wire:model.debounce.500ms="searchTerm"
                    />
                    <span class="search-icon">🔍</span>
                </div>
                <button class="search-button" wire:click="search">Buscar</button>
            </div>
            
            @if(session('success'))
                <div class="flash-message">{{ session('success') }}</div>
            @endif

            @if ($sensores->isEmpty())
                <p class="text-center" style="color: #6a9bd8;">Nenhum sensor encontrado.</p>
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
                            <tr wire:key="sensor-{{ $sensor->id }}">
                                <td>{{ $sensor->id }}</td>
                                <td>{{ $sensor->tipo }}</td> 
                                <td>{{ $sensor->codigo }}</td> 
                                <td>
                                    <label class="toggle-switch">
                                        <input type="checkbox"
                                            wire:click="toggleStatus({{ $sensor->id }})"
                                            {{ ($sensor->status == 'ativo' || $sensor->status == 1) ? 'checked' : '' }}
                                        />
                                        <span class="slider">
                                            <div class="toggle-icons">
                                                <span class="icon-off">❌</span>
                                                <span class="icon-on">✔️</span>
                                            </div>
                                        </span>
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

<script>
    document.addEventListener('livewire:load', function () {
        const flashMessage = document.querySelector('.flash-message');
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.display = 'none';
            }, 3000);
        }
    });
</script>
