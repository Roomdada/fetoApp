<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    public function cas()
    {
      return $this->hasMany('App\Models\Cas');
    }


    public function children()
    {
      return $this->hasMany('App\Models\Children');
    }


    public function type()
    {
    	return $this->belongsTo('App\Models\Type');
    }


    //public function createOrganisation(string $name, string $email,string $password, string $phone,int $type_id)
}
