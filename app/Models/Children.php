<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;



    public function organisation()
    {
    	return $this->belongsTo('App\Models\Organisation');
    }



    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    } 
}
