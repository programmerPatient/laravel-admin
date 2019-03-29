<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();

        for($i=0;$i<300;$i++){
        	App\User::create([
        		'name'=>$faker->name,
        		'email'=>mt_rand(10000,20000000).'@qq.com',
        		'password'=>bcrypt('password')
        	]);
        }
    }
}
