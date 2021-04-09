<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['id', 'name'];

    public static function checkIfExists($token){
        return Instructor::find($token) != null;
    }
}
