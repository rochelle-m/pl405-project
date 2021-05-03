<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $table = "lost";
    
    protected $fillable = ['aadhar_no', 'reason', 'fir'];

    public static function new($aadhar_no, $fir, $reason) {
        return Lost::create([
            'aadhar_no' => $aadhar_no,
            'fir' => $fir,
            'reason' => $reason,
        ]);
    }
}
