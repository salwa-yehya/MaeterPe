<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    protected $guarded = [];
    
  
     public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function country(){
        return $this->belongsTo(ShipCountry::class,'country_id','id');
    }

     public function city(){
        return $this->belongsTo(ShipCity::class,'city_id','id');
    }

   
  

}
