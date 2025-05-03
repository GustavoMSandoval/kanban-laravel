<div class="kanban-card" draggable="true">
    @if ($todo->isHighPriority)
        <div class="badge high">
            <span>
                Alta prioridade
            </span>
        </div>
    @else
        <div class="badge normal">
            <span>
                Prioridade normal
            </span>
        </div>
    @endif
    <p class="card-title">
        {{ Str::limit($todo->description, 30) }}
    </p>
    <div class="card-infos">
        <div class="card-icons">
            <p>
                <i class="fa-regular fa-comment">
                    {{ $todo->comments_quantity }}
                </i>
            </p>
            <p>
                <i class="fa-solid fa-paperclip">
                    
                </i>
            </p>
        </div>
        <div class="user">
            <img src="{{ asset('images/foto_bonita.jpg') }}" alt="">
        </div>
    </div>
</div>