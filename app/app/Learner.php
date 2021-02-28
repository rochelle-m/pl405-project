<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    protected $fillable = [
        'aadhar_no', 'eid', 'exam_date',
        'issue_date', 'status', 'exam_password'
    ];
}
