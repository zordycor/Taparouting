<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    protected $table = 'bar';

    public function tapas(){
        return $this->hasMany('App\Tapa');
    }

}
