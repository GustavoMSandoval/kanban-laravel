@props(['id'])

<div id="modal-todo-{{ $id }}" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Descrição todo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('todo.store') }}">
                  @csrf
                  <input type="hidden" name="todo_column_id" value="{{ $id }}">
                    <div class="mb-3">
                      <input type="text" class="form-control mb-3" name="description">
                    </div>
                    <div class="mb-3">
                      <input type="radio" class="form-check-input" name="isHighPriority" value="1">
                      <label class="form-check-label">Alta prioridade</label>
                      <input type="radio" class="form-check-input" name="isHighPriority" value="0">
                      <label class="form-check-label">Prioridade normal</label>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
  </div>