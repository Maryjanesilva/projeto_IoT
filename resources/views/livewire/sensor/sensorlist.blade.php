<div class="container mt-5">
     <div class="card">
            <div class="shadow rounded-4">
                <div class="card-header d-flex justify-content-between alingn-items-center text-white"
                    style="background-color: rgb(43, 156, 226)">
                    <h5 class="mb-0">Sensores</h5>
                    <a href="{{ route('sensor.create') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-plus-circle"></i>
                        Novo Cadastro
                    </a>
                </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Id Ambiente</th>
                    <th>Codigo</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($sensor as $s)
                    <tr>
                        <td>{{ $s->ambiente->id }}</td>
                        <td>{{ $s->codigo }}</td>
                        <td>{{ $s->tipo }}</td>
                        <td>{{ $s->descricao }}</td>
                        <td>{{ $s->status }}</td>
                        <td>
                            <a href="{{ route('sensor.edit', $s->id) }}"
                                class="btn btn-info me-1" data-bs-toggle="tooltip" title="Editar">Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
