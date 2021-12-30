<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class links__detilesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linkdetiles')->insert(array(

            array(
                'link_id'=>1,
                'linkdetileName'=>"ادارة شؤن الموظفين",
                'linkPageNmae'=>"index.php",
                'linkRoutName'=>"/index.php",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'link_id'=>2,
                'linkdetileName'=>"ادارة شؤن الشركات",
                'linkPageNmae'=>"index.php",
                'linkRoutName'=>"/index.php",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            )
        ));

    }
}
