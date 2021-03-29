<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Learner extends JsonResource
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
            'aadhar_no' =>  $this->aadhar_no,
            'eid'  =>  $this->eid,
            'exam_date' =>  $this->exam_date,
            'exam_password'=> $this->exam_password ,
            'status' =>  $this->status ,
            'issue_date' =>  $this->issue_date,
            'type'  =>  $this->type
        ];
    }
}
