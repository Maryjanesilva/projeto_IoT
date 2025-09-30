<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded">
                <div class="card-header text-center fw-bold text-info mb-1">
                    <h4>Edição de Sensores</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="salvar">
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="codigo" wire:model.defer="codigo"
                                placeholder="Sala, biblioteca...">
                        </div>

                         <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="tipo" wire:model.defer="tipo"
                                placeholder="Luminosidade...">
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" wire:model.defer="descricao"
                                placeholder="digite aqui...">
                        </div>
                         <div class=mb-3>
                                        <label for="status" class="form-label fw-semibold">Status</label>
                                        <select class="form-select" id="status" name="status"
                                            wire:model.defer="status">
                                            <option hidden>Selecione</option>
                                            <option value="0">Ativo</option>
                                            <option value="1">Inativo</option>
                                        </select>
                                        
                                    </div>

                                    
                            <div class=mb-3>
                                <label for="ambiente_id" class="form-label fw-semibold">Ambiente</label>
                                <select class="form-select" id="ambiente_id" name="ambiente_id"
                                    wire:model.defer="ambiente_id">
                                    @foreach ($ambiente as $a)
                                        <option value="{{$a->id }}" > {{ $a->nome }}</option>
                                    @endforeach
                                </select>

                            </div>
                        <input class="btn btn-info mt-2" type="submit" value="Salvar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
