<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    public function bares(){
        return $this->hasMany('App\Bar');
    }
}
