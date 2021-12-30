<?php

namespace Database\Seeders;


use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class confarzation_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>1,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>2,'User_id'=>2,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>3,'User_id'=>7,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>4,'User_id'=>8,'created_at'=>now(),'updated_at'=>Carbon::now(),]);

        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>2,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>2,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>7,'created_at'=>now(),'updated_at'=>Carbon::now(),]);

        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>8,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>1,'created_at'=>now(),'updated_at'=>Carbon::now(),]);

        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>1,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>8,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>7,'created_at'=>now(),'updated_at'=>Carbon::now(),]);

        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>2,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
        DB::table('confarzation_user')->insert(['Confarzation_id'=>1,'User_id'=>1,'created_at'=>now(),'updated_at'=>Carbon::now(),]);
    }
}
