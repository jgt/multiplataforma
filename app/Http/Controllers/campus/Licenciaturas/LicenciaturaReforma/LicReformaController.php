<?php

namespace App\Http\Controllers\campus\Licenciaturas\LicenciaturaReforma;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LicReformaController extends Controller
{
    
    public function adminEmpresas()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasReforma.adminEmpresas');
    }

    public function contaduriaPublica()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasReforma.contaduriaPublica');
    }

    public function informatica()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasReforma.informatica');
    }

    public function psicologiaGeneral()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasReforma.psicologiaGeneral');
    }

    public function derecho()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasReforma.derecho');
    }
}
