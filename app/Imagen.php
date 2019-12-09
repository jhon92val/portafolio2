<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table='imagenes';
    protected $fillable = array ('trabajo_id','imagen','size');

    public function trabajos(){
        return $this->belongsTo('App\Trabajo');
    }
}
