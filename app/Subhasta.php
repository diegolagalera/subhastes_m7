<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subhasta extends Model
{
    //
    protected $table='subhastes';
    protected $fillable = [
        'id_article','preu_venta', 'actiu', 'data' ,
    ];

//una subhasta pot teni 1 o m lisitacions
    public function lisitacio()
    {
        return $this->hasMany('App\Lisitacio');
    }
    public function id_article()
    {
        $article=$this->belongsTo('App\articles','id_article')->get();
        return $article[0];
    }
}
