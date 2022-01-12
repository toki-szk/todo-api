<?php

namespace Modules\Task\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'is_done'
    ];

    protected static function newFactory()
    {
        return \Modules\Task\Database\factories\TaskFactory::new();
    }
}
