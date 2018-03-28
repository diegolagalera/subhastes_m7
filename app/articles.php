<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    //
    public function afegircate($id,$cat){
      DB::table('categories_articles')->where('id_article','=',$id)->delete();
        for($i=0;$i<count($cat);$i++){
          DB::table('categories_articles')->insert([
            'id_article'=>$id,
            'id_categoria'=>$cat[$i],
          ]);
        }
      }
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
