<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

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

    protected $hidden = ['password'];

    public static function new($data) {
        return Citizen::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'aadhar_no' => $data['aadhar_no'],
            'phone_number' => $data['phone_number'],
            'street' => $data['street'],
            'pincode' => $data['pincode'],
            'date_of_birth' => $data['date_of_birth'],
            'type' => $data['type'],
            'gender' => $data['gender'],
            'signature' => $data['signature'],
            'photo' => $data['photo'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
}
