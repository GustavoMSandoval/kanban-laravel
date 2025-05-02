<div class="kanban-column" data-id="1">
    <div class="kanban-title">
        <h2>
            Pendente
        </h2>
        <button class="add-card">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    <div class="kanban-cards">
        @foreach ($todos as $todo)
            <x-todos.todo-card :todo="$todo"/>
        @endforeach
    </div>
</div>