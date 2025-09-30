<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded">
                <div class="card-header text-center fw-bold text-primary mb-1">
                    <h4>Editar Ambientes</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="salvar">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" wire:model.defer="nome"
                                placeholder="Sala, biblioteca...">
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
                        <input class="btn btn-primary mt-2" type="submit"  value="Salvar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div