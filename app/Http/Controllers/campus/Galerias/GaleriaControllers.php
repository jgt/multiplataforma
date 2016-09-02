<?php

namespace App\Http\Controllers\campus\Galerias;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GaleriaControllers extends Controller
{
    
    public function galeriaPalenque()
    {
    	return view('HomeInternos.Galerias.galeriaPalenque');
    }

    public function galeriaReforma()
    {
    	return view('HomeInternos.Galerias.galeriaReforma');
    }

    public function galeriaSancristobal()
    {
    	return view('HomeInternos.Galerias.galeriaSancristobal');
    }

    public function galeriaTuxtla()
    {
    	return view('HomeInternos.Galerias.galeriaTuxtla');
    }
}
