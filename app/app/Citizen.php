<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'first_name', 'middle_name', 'last_name',
        'aadhar_no', 'email', 'gender', 'street',
        'pincode', 'date_of_birth', 'phone_number', 'password'
    ];
}
