<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Citizen extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'aadhar_no' => $this->aadhar_no,
            'email'=> $this->email,
            'pincode'=> $this->pincode,
            'password'=> $this->password,
            'phone_no' => $this->phone_no,
            'street' => $this->street,
            'photo' => $this->photo,
            'signature' => $this->signature,
        ];
    }
}
