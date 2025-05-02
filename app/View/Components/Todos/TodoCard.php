<?php

namespace App\View\Components\Todos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodoCard extends Component
{
    public $todo;

    public function __construct($todo)
    {
        $this->todo = $todo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.todos.todo-card');
    }
}
