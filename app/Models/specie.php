<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specie extends Model
{
    use HasFactory;

    public function getManager()
   {
       return $this->hasMany('App\Models\Manager', 'specie_id', 'id');
   }

    public function getAnimal()
   {
       return $this->hasMany('App\Models\Animal', 'specie_id', 'id');
   }

}
