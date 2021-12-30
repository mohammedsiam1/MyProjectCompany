<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class linksTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert(array(
array(
    'linksName'=>"ادارة شؤن الموظفين",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),
array(
    'linksName'=>"ادارة شؤن الشركات",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>"ادارة شؤن الرواتب",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>"ادارة شؤن البحث",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>"ادارة شؤن الشركات",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>" شؤن الصيانة",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>"ادارة شؤن الصيانة",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>" شؤن الشركات",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>" شؤن البحث",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
),array(
    'linksName'=>"ادارة شؤن المزظفين",
    'linkclass'=>"A",
    'created_at'=>Carbon::now(),
    'updated_at'=>Carbon::now(),
)

        ));
    }
}
