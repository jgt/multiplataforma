<?php

namespace App\Http\Controllers\campus\OfertaEducativa;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OfertaEducativaController extends Controller
{
    
    public function ofertaPalenque()
    {
    	return view('homeInternos.OfertaEducativa.ofertaPalenque');
    }

    public function ofertaReforma()
    {
    	return view('homeInternos.OfertaEducativa.ofertaReforma');
    }

    public function ofertaSancristobal()
    {
    	return view('homeInternos.OfertaEducativa.ofertaSancristobal');
    }

    public function ofertaTuxtla()
    {
    	return view('homeInternos.OfertaEducativa.ofertaTuxtla');
    }
}
