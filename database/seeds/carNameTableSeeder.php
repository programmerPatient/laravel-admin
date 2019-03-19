<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;

class carNameTableSeeder extends Seeder
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
        	App\Models\carName::create([
        		'carName'=>$faker->name
        	]);
        }
    }
}
