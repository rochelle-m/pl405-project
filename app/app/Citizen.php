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
        'pincode', 'date_of_birth', 'phone_number', 'password', 'llicense_no'
    ];

    /**
     * Helper function, trim aadhar number
     */
    public static function getTrimmedAadharNo($aadhar_no)
    {
        return str_replace(' ', '', $aadhar_no);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getLLicenseNo()
    {
        return "{$this->llicense_no}";
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    protected $hidden = ['password'];

    public static function new($data) {
        
   
        $file1 = $data['photo'];
        $file2 = $data['signature'];

        $photo = $file1->openFile()->fread($file1->getSize());
        $signature = $file2->openFile()->fread($file2->getSize());
        
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
            'signature' => $signature,
            'photo' => $photo,
            'password' => Hash::make($data['password']),
            'llicense_no' => ''
        ]);
    }
    
}
