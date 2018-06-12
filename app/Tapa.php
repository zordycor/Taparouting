<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tapa extends Model
{

	public static function aceptadas(){
		return static::where('aceptado', true)->get();
	}

    public function bar(){
        return $this->belongsTo('App\Bar');
    }

    public function ruta(){
        return $this->hasOne('App\Ruta','nombre','ruta');
    }
}
