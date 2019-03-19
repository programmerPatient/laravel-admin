<?php

use Illuminate\Database\Seeder;

class carTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();

        for($i=0;$i<100;$i++){
        	App\Models\carType::create([
        		'carType'=>$faker->name
        	]);
        }
    }
}
