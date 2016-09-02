<?php

namespace App\Http\Controllers\campus\Licenciaturas\LicenciaturaPalenque;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LicPalenqueController extends Controller
{
    
    public function adminEmpresas()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturaPalenque.adminEmpresas');
    }

    public function adminTuristicas()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturaPalenque.adminTuristicas');
    }

    public function arquitectura()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturaPalenque.arquitectura');
    }

    public function contaduriaPublica()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturaPalenque.contaduriaPublica');
    }

    public function derecho()
    {
    	return view('homeInternos.Licenciaturas.LicenciaturaPalenque.contaduriaPublica');
    }

    public function enfermeria()
    {
        return view('homeInternos.Licenciaturas.LicenciaturaPalenque.enfermeria');
    }

    public function informatica()
    {
        return view('homeInternos.Licenciaturas.LicenciaturaPalenque.informatica');
    }

    public function ingenieriaCivil()
    {
        return view('homeInternos.Licenciaturas.LicenciaturaPalenque.ingenieriaCivil');
    }

    public function ingenieriaTelematica()
    {
        return view('homeInternos.Licenciaturas.LicenciaturaPalenque.ingenieriaTelematica');
    }

    public function psicologiaGeneral()
    {
        return view('homeInternos.Licenciaturas.LicenciaturaPalenque.psicologiaGeneral');
    }

}
