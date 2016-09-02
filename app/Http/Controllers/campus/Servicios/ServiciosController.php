<?php

namespace App\Http\Controllers\campus\Servicios;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiciosController extends Controller
{
    
     public function servicioGeneral()
    {
        return view('homeInternos.Servicios.serviciosGeneral');
    }

    public function servicioReforma()
    {
    	return view('homeInternos.Servicios.servicioReforma');
    }

    public function servicioSancristobal()
    {
    	return view('homeInternos.Servicios.servicioSancristobal');
    }

    public function servicioTuxtla()
    {
        return view('homeInternos.Servicios.servicioTuxtla');
    }
}
