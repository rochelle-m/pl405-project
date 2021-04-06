<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class permanent_license extends JsonResource
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
            'aadhar_no' => $this->aadhar_no,
            'license_no' => $this->license_no,
            'vehicle_type' => $this->vehicle_type,
        ];
    }
}
