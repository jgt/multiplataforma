<?php

namespace App\Http\Controllers\campus\Maestrias\MaestriasReforma;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaeReformaController extends Controller
{
    
    public function cienciaEducacion()
    {
    	return view('homeInternos.Maestrias.MaestriasReforma.cienciaEducacion');
    }
}
