<div>
    <div class="container mt-5">
        {{-- ---------------------------------------------------------------------------------- --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismisss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismisss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="shadow rounded-4">
                <div class="card-header d-flex justify-content-between alingn-items-center text-white"
                    style="background-color: blueviolet">
                    <h5 class="mb-0">Ambientes</h5>
                    <a href="{{ route('ambiente.create') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-plus-circle"></i>
                        Novo Cadastro
                    </a>
                </div>
        {{-- -------------------------------------------------------------------------------------- --}}
                <div class="card-body p-0">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>DESCRIÇÃO</th>
                                <th>STATUS</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
        {{-- --------------------------------------------------------------------------------------- --}}
                        <tbody>
                            @foreach ($ambiente as $a)
                                <tr>                                    
                                    <td>{{ $a->id }}</td>
                                    <td>{{ $a->nome }}</td>
                                    <td>{{ $a->descricao }}</td>
                                    <td>{{ $a->status }}</td>
                                    <td>
                                        <a href="{{ route('ambiente.list', $a->id) }}" class="btn btn-sm"
                                            style="background-color: rgb(240, 240, 146)">EDITAR</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
        {{-- ---------------------------------------------------------------------------------------- --}}
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>