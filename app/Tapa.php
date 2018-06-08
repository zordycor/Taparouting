<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tapa extends Model
{
    public function bar(){
        return $this->hasOne('App\Bar');
    }

    public function ruta(){
        return $this->hasOne('App\Ruta');
    }
}
