<?php

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
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
        	App\Models\Warehouse::create([
        		 'carNames_id'=>mt_rand(1,200),
        		 'carTypes_id'=>mt_rand(1,200),
        		 'image_url'=>'/image',
        		 'number'=>mt_rand(1,20000),
        		 'price'=>mt_rand(0,60000000)
        	]);
        }
    }
}
