<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{

    protected $primaryKey = 'aadhar_no';

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'aadhar_no', 
        'email', 'gender', 'street', 'photo', 'signature',
        'pincode', 'date_of_birth', 'phone_number', 'password'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
