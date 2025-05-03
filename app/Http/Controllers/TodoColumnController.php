<?php

namespace App\Http\Controllers;

use App\Models\TodoColumn;
use Illuminate\Http\Request;

class TodoColumnController extends Controller
{
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
        ]);

        TodoColumn::create($incomingFields);

        return redirect('/');
    }
}
