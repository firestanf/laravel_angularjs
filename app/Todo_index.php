<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo_index extends Model
{
    protected $table = 'todo_index';

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
