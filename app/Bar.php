<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    public function rutas(){
        return $this->belongsTo('App\Ruta');
    }

    public function related(){
        $ruta = \DB::table('rutas')->where('id',$this->ruta_id)->nombre;

        return $ruta;
    }

}
