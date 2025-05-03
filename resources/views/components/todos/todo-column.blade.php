<div class="kanban-column" data-id="{{ $column->id }}">
    <div class="kanban-title">
        <h2>
            {{ $column->title }}
        </h2>
        <button class="add-card" data-bs-toggle="modal" data-bs-target="#modal-todo-{{ $column->id }}">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    <div class="kanban-cards">
        @foreach ($todos as $todo)
            <x-todos.todo-card :todo="$todo"/>
        @endforeach
    </div>
</div>
<x-modal-todo :id="$column->id"/>