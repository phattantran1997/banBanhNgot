<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
   protected $table = "type_products";

   public function product(){
     return $this->hasMany('App\products','id_type','id');
   }
}
