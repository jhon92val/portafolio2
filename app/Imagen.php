<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table='imagenes';
    protected $fillable = array ('trabajo_id','imagen','titulo','size','descripcion');

    public function trabajos(){
        return $this->belongsTo('App\Trabajo');
    }
}
