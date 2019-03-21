<?php

namespace App\Models;

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
}
