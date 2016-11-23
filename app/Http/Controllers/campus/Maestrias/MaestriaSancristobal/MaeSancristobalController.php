<?php

namespace App\Http\Controllers\campus\Maestrias\MaestriaSancristobal;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaeSancristobalController extends Controller
{
    
    public function administracion()
    {
    	return view('homeInternos.Maestrias.MaestriaSancristobal.administracion');
    }

    public function computacion()
    {
    	return view('homeInternos.Maestrias.MaestriaSancristobal.computacion');
    }

    public function derechoConstitucional()
    {
    	return view('homeInternos.Maestrias.MaestriaSancristobal.derechoConstitucional');
    }

    public function finanzas()
    {
    	return view('homeInternos.Maestrias.MaestriaSancristobal.finanzas');
    }
}
