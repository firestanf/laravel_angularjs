<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo_content extends Model
{
    protected $table = 'todo_content';

    public function index()
    {
        //return $this->belongsTo(Todo_index::class,'id');
        return $this->belongsTo(Todo_index::class,'todo_id');
    }
}
