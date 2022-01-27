<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table ="rooms";
    public function hotel (){
        return $this->belongsTo(Hotels::class,'hotel_id');
    }
    public function hotel_booking (){
        return $this->hasOne(Hotel_booking::class,'room_id','id');
    }
    
    
}
