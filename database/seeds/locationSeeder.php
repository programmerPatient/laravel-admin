<?php

use Illuminate\Database\Seeder;

class locationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();

        $province=['河南省','安徽省','河北省','湖南省','江西省','山西省'];

        for($i=0;$i<300;$i++){
        	App\Models\Location::create([
        		 'users_id'=>mt_rand(1,200),
        		 'state'=>'中国',
        		 'province'=>$province[mt_rand(0,5)],
        		 'city'=>'北京',
        		 'county'=>'固始县',
        		 'village'=>'丰港乡',
        		 'detail'=>'台底村台地队'
        	]);
        }
    }
}
