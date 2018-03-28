<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lisitacio extends Model
{
    //


//Una lisitació pertany a un usuari
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function subhasta()
    {
        return $this->belongsTo('App\Subhasta');
    }
}
