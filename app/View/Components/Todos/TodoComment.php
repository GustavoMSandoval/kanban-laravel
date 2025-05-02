<?php

namespace App\View\Components\Todos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodoComment extends Component
{
    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.todos.todo-comment');
    }
}
