<div id="modal-column" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nome da coluna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('column.store') }}">
                  @csrf
                    <input type="text" class="form-control my-3" name="title">
                    <div class="modal-footer mt-2">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
  </div>