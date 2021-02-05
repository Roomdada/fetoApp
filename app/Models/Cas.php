<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cas extends Model
{
    use HasFactory;


    public function organisation(){
    	return $this->belongsTo('App\Models\Organisation');
    }



    public function castype()
    {
    	return $this->belongsTo('App\Models\CasType');
    }



}
