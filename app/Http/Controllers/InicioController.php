<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        return view("inicio");
    }

    public function servicios()
    {
        return view("servicios");
    }

    public function portafolio()
    {
        return view("portafolio");    
    }

    public function contacto()
    {
        return view("contacto");
    }

}
