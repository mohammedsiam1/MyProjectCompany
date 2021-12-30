<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class degree extends Model
{
    protected $table ='degrees';
    protected $fillable =['id','NameDegree','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
