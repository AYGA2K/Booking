<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villas extends Model
{
    use HasFactory;
    protected $table = "villas";

 
    public function villa_booking (){
        return $this->hasOne(Villa_booking::class);
}
}