<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
  
    use HasFactory;
    protected $table ="villas";
    public function villa (){
        return $this->belongsTo(villas::class,'villa_id');
    }
  
    
    
}

