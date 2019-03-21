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

        for($i=0;$i<200;$i++){
        	App\Models\carType::create([
                'carNames_id'=>mt_rand(1,200), 
        		'carType'=>$faker->name
        	]);
        }
    }
}
