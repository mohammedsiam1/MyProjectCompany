<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table ='employees';
    protected $fillable =['id','FirstName','LastName','Email','Phone','Berthday','DateOfEmployment',
    'Photo','Gender','OccupationalSpecialization','cities_Id','degrees_Id','specialties_Id','created_at','updated_at'];
    protected $hidden=[];
}
