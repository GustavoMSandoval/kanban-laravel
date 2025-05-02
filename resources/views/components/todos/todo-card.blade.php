<div class="kanban-card" draggable="true">
    <div class="badge high">
        <span>
            {{ $todo->isHighPriority }}
        </span>
    </div>
    <p class="card-title">
        {{ $todo->description }}
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