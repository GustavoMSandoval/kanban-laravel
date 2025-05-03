<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'isHighPriority' => ['required', 'boolean'],
            'description' => 'required',
        ]);

        Todo::create($incomingFields);
        
        return redirect('/');
    }
}
