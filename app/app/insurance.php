<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = ['aadhar_no', 'vehicle_no', 'vehicle_type'];


    protected $table = "insurance";
}
