<?php

namespace App\View\Components\Todos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodoColumn extends Component
{  
    public $column;
    public $todos;

    public function __construct($column, $todos)
    {
        $this->column = $column;
        $this->todos = $todos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.todos.todo-column');
    }
}
