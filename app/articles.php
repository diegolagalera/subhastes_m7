<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    //

//un article sols pot estar a una categoria, relacio de 1 a m
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    // public function user()
    // {
    //     return $this->hasMany('App\User');
    // }

    //un article sols pot estar a una subhasta, relacio de 1 a m

    public function subhasta()
    {
        return $this->belongsTo('App\Subhasta');
    }
}
