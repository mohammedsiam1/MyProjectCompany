<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialty extends Model
{
    protected $table ='specialties';
    protected $fillable =['id','NmaeSpecialties','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
