<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ruta extends Model
{
    use Searchable;

    protected $fillable = [
        'nombre','localidad','inicio','fin','price1','price2',
        'price3','description'

    ];

    public function bares(){
        return $this->hasMany('App\Bar');
    }

    public function searchableAs()
    {
        return 'nombre';
    }

    public function related(){
        $bares = \DB::table('bares')->where('ruta_id',$this->id)->get();

        return $bares;
    }
}
