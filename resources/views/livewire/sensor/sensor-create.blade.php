<div class="container mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">


            <h2 class="text-center mb-4" style="font-family: 'Arial', sans-serif; color: #1175c1; font-weight: bold;">CADASTRO DE SENSORES
            </h2>

            <div class="card shadow-lg border-0" >
                <div class="card-body" >
                    <form wire:submit.prevent="store">


    


                        <div class="form-group mb-3">
                            <label for="codigo" class="form-label fw-bold"> CODIGO</label>
                            <input type="text" id="codigo" wire:model.defer="codigo" class="form-control">
                            @error('codigo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="tipo" class="form-label fw-bold">TIPO</label>
                            <input type="text" wire:model.defer="tipo" id="tipo" class="form-control">
                            @error('tipo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label fw-bold" >DESCRIÇÃO</label>
                            <textarea class="form-control" id="descricao" wire:model.defer="descricao" rows="3"></textarea>
                            @error('descricao')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        
                        <div class="mb-3">
                            <label for="ambiente_id" class="form-label fw-bold">AMBIENTE</label>

                            <select class="form-select form-select-sm" aria-label="Small select example" wire:model.defer="ambiente_id">
                                @foreach ($ambiente as $a)
                                    <option value="{{ $a->id }}">{{ $a->nome }}</option>
                                @endforeach
                            </select>
                            @error('ambiente_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>


                        <div class="mb-3">
                        <label for="text" class="form-label">STATUS</label>
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

                    
                        
                                <a href="{{ route('sensor.list') }}"><input class="btn btn-info"  type="submit"  value="Cadastrar"></a>
                    

                                
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>