<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permanent_license extends Model
{
    protected $table = "permanent_license";
    protected $fillable =['aadhar_no', 'license_no', 'vehicle_type'];
}
