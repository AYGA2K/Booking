<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel_booking extends Model
{
   
    use HasFactory;
    protected $table = "hotel_bookings";
    public function hotel(){
        return $this->hasOne(Hotels::class);
    }
    
    public function guest(){
        return $this->belongsTo(Guest::class);
    }

    public function room (){
        return $this->belongsTo(Rooms::class);
    }
 


}
