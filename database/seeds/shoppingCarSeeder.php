<?php

use Illuminate\Database\Seeder;

class shoppingCarSeeder extends Seeder
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
        	App\Models\shoppingCar::create([
        		 'users_id'=>mt_rand(1,200),
        		 'warehouses_id'=>mt_rand(1,200),
        		 'number'=>mt_rand(1,20000),
        	]);
        }
    }
}
