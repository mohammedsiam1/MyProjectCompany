<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class area extends Model
{
   protected $table='areas';
   protected $fillable =['id','city_Id','AreaName','created_at','updated_at'];
   protected $hidden=['created_at','updated_at'];
}
