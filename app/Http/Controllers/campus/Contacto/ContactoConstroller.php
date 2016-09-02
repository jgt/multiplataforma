<?php

namespace App\Http\Controllers\campus\Contacto;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactoConstroller extends Controller
{
    
    public function contactoPalenque()
    {
    	return view('homeInternos.contacto.contactoPalenque');
    }

    public function contactoReforma()
    {
    	return view('homeInternos.contacto.contactoReforma');
    }

    public function contactoSancristobal()
    {
    	return view('homeInternos.contacto.contactoSancristobal');
    }

    public function contactoTuxtla()
    {
        return view('homeInternos.contacto.contactoTuxtla');
    }
}
