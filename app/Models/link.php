<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
   protected $table ='links';
   protected $fillable =['id','linksName','linkclass','created_at','updated_at'];
   protected $hidden=['created_at','updated_at'];
   public $timestamps=true;


   public function linkdetiles(){
return $this->hasMany('App\Models\linkdetiles','link_id','id');
//الموديل الي رايح عليه والمفتاح الاجنمبي الموجود بالموديل الي رايح عليه والبرايمري كي الي ماسكو حاليا من هاد المودل
  // this is reletion from basic linke(big)to detiles linke(smoll linke)

}
}
