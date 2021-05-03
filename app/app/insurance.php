<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
	protected $table = "insurance";
    protected $fillable = ['aadhar_no',
    'vehicle_no',
    'vehicle_type' ];

}
