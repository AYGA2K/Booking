<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;
    protected $table = "hotels";
   public function rooms(){
       return $this->hasMany(Rooms::class,'hotel_id','id');
   }


   public function hotel_booking (){
       return $this->belongsTo(Hotel_booking::class);
   }
}
