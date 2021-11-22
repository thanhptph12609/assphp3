<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table='cars';
    protected $fillable=['plate_number','owner','travel_fee'];
    
    public function Passengers(){
        return $this->hasMany(passengers::class,'car_id'); 
    }
}