<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Warehouse;

class shoppingCar extends Model
{
    protected $table="shoppingCars";


    public function user()
    {
    	return $this->belongsTo(User::class);
    }


    public function warehouse()
    {
    	return $this->belongsTo(Warehouse::class);
    }
}
