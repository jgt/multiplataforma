<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaginaCeprogController extends Controller
{
    
    public function index()
    {
    	return view('layouts.PaginaCeprog.Home.mensaje');	
    }

    public function home()
    {
    	return view('welcome');
    }

    public function mision()
    {
    	return view('layouts.PaginaCeprog.Home.mision');
    }

    public function testInteligencia()
    {
        return view('homeInternos.testInteligencia');
    }

}
