<?php

namespace App\Http\Controllers\campus\Doctorado\DoctoradoPalenque;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    
    public function doctoradoEducacion()
    {
    	return view('homeInternos.Doctorado.DoctoradoPalenque.doctoradoEducacion');
    }
}
