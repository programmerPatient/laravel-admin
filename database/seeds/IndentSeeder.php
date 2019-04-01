<?php

use Illuminate\Database\Seeder;

class IndentSeeder extends Seeder
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
        	App\Models\Indent::create([
        		'users_id'=>mt_rand(1,200),
                'warehouses_id'=>mt_rand(1,200), 
        		'number'=>mt_rand(1,3),
        		'price'=>mt_rand(1000,5000000)
        	]);
        }
    }
}
