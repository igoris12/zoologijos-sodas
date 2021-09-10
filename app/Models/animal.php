<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;

    public function getSpecie()
   {
       return $this->belongsTo('App\Models\Specie', 'specie_id', 'id');
   }

   public function getManager()
   {
       return $this->belongsTo('App\Models\Manager', 'manager_id', 'id');
   }

}
