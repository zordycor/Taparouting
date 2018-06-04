<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $city = 'localidad';
}
