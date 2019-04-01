<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Indent extends Model
{
    protected $table="indents";


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
