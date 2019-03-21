<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carName extends Model
{
    protected $table="carNames";

    public function carTypes()
    {
    	// return $this->hasMany('App\Models\carType','carName_id','id');
    	return $this->hasMany(carType::class);
    }


    public function Warehouse()
    {
    	return $this->belongsTo(Warehouse::class);
    }
}
