<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
  public function afegircate($id,$cat){
    DB::table('categories_articles')->where('id_article','=',$id)->delete();
      for($i=0;$i<count($cat);$i++){
        DB::table('categories_articles')->insert([
          'id_article'=>$id,
          'id_categoria'=>$cat[$i],
        ]);
      }
    }

}
