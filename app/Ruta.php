<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ruta extends Model
{
    use Searchable;

    protected $fillable = [
        'nombre','localidad','inicio','fin','price1','price2',
        'price3','description','navcolor','textcolor','img'

    ];

    public function bares(){
        return $this->hasMany('App\Bar');
    }

    public function searchableAs()
    {
        return 'nombre';
    }

    public function related(){
        $tapas = \DB::table('tapas')->where('ruta',$this->id)->get();
        $bares = \DB::table('bar')->where('ruta',$this->id)->get();

        return array($tapas, $bares);
    }
}
