<?php

namespace App\Http\Controllers\campus;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminCampusController extends Controller
{
    
     public function palenqueHome()
    {
        return view('homeInternos.palenqueHome');
    }

    public function reformaHome()
    {
    	return view('homeInternos.reformaHome');
    }

    public function sancristobalHome()
    {
    	return view('homeInternos.sancristobalHome');
    }

    public function tuxtlaHome()
    {
    	return view('homeInternos.tuxtlaHome');
    }

    public function admision()
    {
        return view('homeInternos.admisiones');
    }

}
