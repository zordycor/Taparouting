<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role','name', 'email', 'password'
    ];

    public function bar(){
      return $this->belongsTo('App\Bar');
    }

  public function barRelated(){
    $bar = \DB::table('bares')->where('user_id',$this->id)->first();

    return $bar;
  }

  public function rutaRelated(){
    $ruta = \DB::table('rutas')->where('user_id',$this->id)->first();

    return $ruta;
  }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
