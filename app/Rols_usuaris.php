<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rols_usuaris extends Model
{
  protected $fillable = [
      'id','id_usuari','id_rol',
  ];

}
