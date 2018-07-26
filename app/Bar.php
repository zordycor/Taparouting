<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Bar extends Model
{

    use Favoriteable;
    protected $table = 'bares';


    public function rutas(){
        return $this->belongsTo('App\Ruta');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function related(){
        $ruta = \DB::table('rutas')->where('id',$this->ruta_id)->nombre;

        return $ruta;
    }

    protected $fillable = [
        'nombre', 'direccion', 'horarios', 'tapanom', 'tapadesc', 'tapaimg', 'ruta_id', 'telefono', 'user_id'
    ]; 
}
