<div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-6 mx-auto">
        <div class="card bg-primary-subtle " >
            <h5 class="card-header fw-bold text-center" $font-family="sans-serif">Sensor</h5>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-bold text-center">Descrição</label>
                        <input type="descricao" class="form-control" id="descricao" name="descricao"
                            placeholder="ex:descricao" wire:model.defer="descricao">
                            </select>
                            @error('descricao')<span class="text-warning small">{{$message}}</span>@enderror
                    </div>

                  
                      <div class="mb-3">
                        <label for="text" class="form-label">status</label>
                        <div class="input-group ">
                            <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                                <option selected>Selecione o Status </option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                            @error('status')
                                <span class="text-warning small">{{ $message }}</span>
                            @enderror
                        </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">status</label>
                        <div class="input-group ">
                            <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                                <option selected>Selecione o Status </option>
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