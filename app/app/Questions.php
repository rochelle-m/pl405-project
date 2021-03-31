<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'id', 'question', 'img', 'option1', 'option2',
        'option3', 'option4', 'category', 'correct', 'level'
    ];
}
