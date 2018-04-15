<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $table='categories';
    protected $fillable = [
        'id','nom', 'descripcio',
    ];

//realio entre categories a articles de 1 a m ja que una categoria pot tenir molts articles
    public function article()
    {
        return $this->hasMany('App\Article');
    }

    public function deletcateart($id){
      DB::table('categories_articles')->where('id_categoria','=',$id)->delete();
    }
}
