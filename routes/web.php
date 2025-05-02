<?php

use App\Models\Todo;
use App\Models\TodoColumn;
use App\Models\TodoComment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $columns = TodoColumn::all();

    return view('kanban', ['columns' => $columns]);
});


Route::post('/todos/column',[TodoColumn::class, 'store'])->name('column.store');
Route::post('/todos/card',[Todo::class, 'store' ])->name('card.store');
Route::post('/todos/comment',[TodoComment::class, 'store'])->name('comment.store');