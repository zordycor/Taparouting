<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    protected $table = 'bar';

    public function tapas(){
        return $this->hasOne('App\Tapa');
    }

    public function rutas(){
        return $this->belongsTo('App\Ruta');
    }

}
