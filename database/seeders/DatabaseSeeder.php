<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Confarzation;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {

        DB::table('users')->insert(array(

            array(
                'name'=>'saeeds',
                'email'=>'dgasdf@gmail.com',
                'email_verified_at'=>Carbon::now(),
                'password'=>'123123123',
                'remember_token'=> 'hjmjmjhm',

            ),

            array(
                'name'=>'gameel',
                'email'=>'gchd@gmail.com',
                'email_verified_at'=>Carbon::now(),
                'password'=>'123123123',
                'remember_token'=> 'hjmjmjhm',

            ),
            array(
                'name'=>'tahreer',
                'email'=>'tahreefggfrfdf@gmail.com',
                'email_verified_at'=>Carbon::now(),
                'password'=>'123123123',
                'remember_token'=> 'hjmjmjhm',

            ),
            array(
                'name'=>'baraa',
                'email'=>'baraafds@gmail.com',
                'email_verified_at'=>Carbon::now(),
                'password'=>'123123123',
                'remember_token'=> 'hjmjmjhm',

            )
        ));


        DB::table('confarzations')->insert(array(

            array(
                'name'=>'Family Group',
                'uuid'=>Str::uuid(),
                'User_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Work Group',
            'uuid'=>Str::uuid(),
            'User_id'=>rand(1,4),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ),
            array(
                'name'=>'Bussniss Group',
                'uuid'=>Str::uuid(),
                'User_id'=>rand(1,4),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),
            array(
                'name'=>'Shcool Group',
                'uuid'=>Str::uuid(),
                'User_id'=>rand(1,4),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),    array(
                'name'=>'Frinds Group',
                'uuid'=>Str::uuid(),
                'User_id'=>rand(1,4),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            )
        ));



    }
}
