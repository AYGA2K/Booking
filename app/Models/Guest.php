<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    public function hotel_booking (){
        return $this->hasOne(Hotel_booking::class,'guest_id','id');
    }
}
