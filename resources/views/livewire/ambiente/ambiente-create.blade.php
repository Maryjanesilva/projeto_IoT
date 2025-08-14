<div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-6 mx-auto">
        <div class="card bg-primary-subtle " >
            <h5 class="card-header fw-bold text-center" $font-family="sans-serif">Ambiente</h5>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-bold text-center">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="ex:Cadastro" wire:model.defer="nome">
                            </select>
                            @error('nome')<span class="text-warning small">{{$message}}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label for="cpf" class="form-label fw-bold text-center">Descrição</label>
                        <input type="text" class="form-control" id="descrição" name="descrição"
                        placeholder="descreva aqui" wire:model.defer="descrição">
                    </select>
                    @error('nome')<span class="text-warning small">{{$message}}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">status</label>
                        <div class="input-group ">
                            <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                                <option selected>Selecione o Status do ambiente</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                            @error('status')
                                <span class="text-warning small">{{ $message }}</span>
                            @enderror
                        </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-sm btn-primary"> Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</div>
