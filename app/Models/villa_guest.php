<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villa_guest extends Model
{
    use HasFactory;
    public function villa_booking (){
        return $this->hasOne(Villa_booking::class,'villa_guest','id');
    }

   
 

}
