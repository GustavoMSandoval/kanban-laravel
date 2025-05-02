<?php

namespace App\View\Components\Todos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodoColumn extends Component
{  
    public $title;
    public $todos;

    public function __construct($title, $todos)
    {
        $this->title = $title;
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
