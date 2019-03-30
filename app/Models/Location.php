<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Location extends Model
{
    protected $table='locations';
    protected $fillable = ['state','province','village','county','city','detail'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
