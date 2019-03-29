<?php

namespace App\Models;
use App\Models\carType;
use App\Models\carName;
use App\Models\shopppingCar;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table="warehouses";

    public function carType()
    {
    	return $this->belongsTo(carType::class);
    }


    public function carName()
    {
    	return $this->belongsTo(carName::class);
    }

    public function shoppingCars()
    {
    	
    return $this->hasMany(shoppingCar::class);}
}
