<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
   protected $table='cities';
   protected $fillable =['id','CityNmae','created_at','updated_at'];
   protected $hidden=['created_at','updated_at'];
}
