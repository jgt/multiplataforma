<?php

namespace App\Http\Controllers\campus\Maestrias\MaestriasPalenque;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaePalenqueController extends Controller
{
    
    public function maestriaAdministracion()
    {
    	return view('homeInternos.Maestrias.MaestriasPalenque.mAdministracion');
    }

    public function maestriaCienciaEducacion()
    {
    	return view('homeInternos.Maestrias.MaestriasPalenque.maestriaCienciaEducacion');
    }

    public function maestriaComputacion()
    {
    	return view('homeInternos.Maestrias.MaestriasPalenque.maestriaComputacion');
    }

    public function maestriaDerecho()
    {
    	return view('homeInternos.Maestrias.MaestriasPalenque.maestriaDerecho');
    }

    public function maestriaDerechoPenal()
    {
    	return view('homeInternos.Maestrias.MaestriasPalenque.maestriaDerechoPenal');
    }

    public function maestriaFinanzas()
    {
    	return view('homeInternos.Maestrias.MaestriasPalenque.maestriaFinanzas');
    }
}
