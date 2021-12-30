<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkdetiles extends Model
{
     protected $table='linkdetiles';
    protected $fillable=['id','link_id','linkdetileName','linkPageNmae','linkRoutName','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=true;

    public function links(){
        return $this->belongsTo('App\Models\link','link_id','id');
    }
}
