<?php

namespace App\Http\Controllers;

use App\Models\TodoComment;
use Illuminate\Http\Request;

class TodoCommentController extends Controller
{
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'todo_id' => 'required',
            'description' => 'required'
        ]);

        TodoComment::create($incomingFields);

        return redirect('/');

    }
}
