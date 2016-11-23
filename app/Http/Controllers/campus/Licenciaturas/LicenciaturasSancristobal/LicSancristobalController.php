<?php

namespace App\Http\Controllers\campus\Licenciaturas\LicenciaturasSancristobal;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LicSancristobalController extends Controller
{
    
    public function adminEmpresas()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.adminEmpresas');
    }

    public function adminEmpresasTuristica()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.adminEmpresasTuristica');
    }

    public function arquitectura()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.arquitectura');
    }

    public function contaduriaPublica()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.contaduriaPublica');
    }

    public function derecho()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.derecho');
    }

    public function informatica()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.informatica');
    }

    public function psicologiaGeneral()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturasSancristobal.psicologiaGeneral');
    }
}
