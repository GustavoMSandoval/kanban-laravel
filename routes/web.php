<?php

use App\Http\Controllers\TodoColumnController;
use App\Http\Controllers\TodoCommentController;
use App\Http\Controllers\TodoController;
use App\Models\TodoColumn;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $columns = TodoColumn::all();

    return view('kanban', ['columns' => $columns]);
});


Route::post('/todos/column',[TodoColumnController::class, 'store'])->name('column.store');
Route::post('/todos/card',[TodoController::class, 'store' ])->name('card.store');
Route::post('/todos/comment',[TodoCommentController::class, 'store'])->name('comment.store');