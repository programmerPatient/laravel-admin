<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carType extends Model
{
    protected $table="carTypes";

    public function carName()
    {
    	return $this->belongsTo(carName::class);
    }


    public function Warehouses()
    {
    	return $this->hasMany(Warehouse::class);
    }
}
