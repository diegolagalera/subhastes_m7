<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //



//realio entre categories a articles de 1 a m ja que una categoria pot tenir molts articles
    public function article()
    {
        return $this->hasMany('App\Article');
    }
}
