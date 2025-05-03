<div id="modal-todo" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Descrição todo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                    <input type="text" class="form-control mb-3" name="description">
                    <div class="mb-3">
                    <input type="radio" class="form-check-input" name="isHighPriority" value="true">
                    <label class="form-check-label">Alta prioridade</label>
                    <input type="radio" class="form-check-input" name="isHighPriority" value="false">
                    <label class="form-check-label">Prioridade normal</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>