<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Todo extends Model
{
    protected $fillable = [
        'description',
        'comments_quantity',
        'isHighPriority',
        'todo_column_id',
    ];

    protected $casts = [
        'isHighPriority' => 'boolean'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function todoColumn(): BelongsTo
    {
        return $this->belongsTo(TodoColumn::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(TodoComment::class);
    }
}
