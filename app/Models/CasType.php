<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasType extends Model
{
    use HasFactory;



    public function cas()
    {
    	return $this->hasMany('App\Models\Cas','cas_types_id');
    }
}
