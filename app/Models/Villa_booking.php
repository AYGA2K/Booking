<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa_booking extends Model
{
    use HasFactory;
    protected $table = "villa_bookings";
    public function villa(){
        return $this->belongsTo(Villas::class);
    }
    
    public function villa_guest(){
        return $this->belongsTo(villa_guest::class,'id');
    }

   
}
