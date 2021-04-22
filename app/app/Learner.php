<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    protected $fillable = ['aadhar_no',
    'eid',
    'exam_date',
    'exam_password' ,
    'status' ,
    'issue_date',
    'type' ];

    public function getType(){
        return $this->type;
    }
}
