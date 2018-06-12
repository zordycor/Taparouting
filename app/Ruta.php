<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $fillable = [
        'nombre','localidad','inicio','fin','price1','price2',
        'price3','description','navcolor','textcolor','img'

    ];

    public function bares(){
        return $this->hasMany('App\Bar');
    }
}
