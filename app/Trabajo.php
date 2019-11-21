<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table='trabajos';

    protected $fillable = array ('titulo','fecha','descripcion','portada','user_id');

    public function imagenes(){
        return $this->hasMany('App\Imagen');
    }

}
