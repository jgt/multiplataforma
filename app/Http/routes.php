<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('mensajeRector', ['as' => 'mensajeRector', 'uses' => 'PaginaCeprogController@index']);
Route::get('ceprog', ['as' => 'ceprog', 'uses' => 'PaginaCeprogController@home']);
Route::get('mision', ['as' => 'mision', 'uses' => 'PaginaCeprogController@mision']);
Route::get('testInteligencia', ['as' => 'testInteligencia', 'uses' => 'PaginaCeprogController@testInteligencia']);

Route::group(['namespace' => 'campus'], function(){

Route::get('palenqueHome', ['as' => 'palenqueHome', 'uses' => 'AdminCampusController@palenqueHome']);
Route::get('reformaHome', ['as' => 'reformaHome', 'uses' => 'AdminCampusController@reformaHome']);
Route::get('sancristobalHome', ['as' => 'sancristobalHome', 'uses' => 'AdminCampusController@sancristobalHome']);
Route::get('tuxtlaHome', ['as' => 'tuxtlaHome', 'uses' => 'AdminCampusController@tuxtlaHome']);
Route::get('admision', ['as' => 'admision', 'uses' => 'AdminCampusController@admision']);


});

Route::group(['namespace' => 'campus\Galerias'], function(){

	Route::get('galeriaPalenque', ['as' => 'galeriaPalenque', 'uses' => 'GaleriaControllers@galeriaPalenque']);
	Route::get('galeriaReforma', ['as' => 'galeriaReforma', 'uses' => 'GaleriaControllers@galeriaReforma']);
	Route::get('galeriaSancristobal', ['as' => 'galeriaSancristobal', 'uses' => 'GaleriaControllers@galeriaSancristobal']);
	Route::get('galeriaTuxtla', ['as' => 'galeriaTuxtla', 'uses' => 'GaleriaControllers@galeriaTuxtla']);

});

Route::group(['namespace' => 'campus\Servicios'], function(){

	Route::get('serviciosGeneral', ['as' => 'serviciosGeneral', 'uses' => 'ServiciosController@servicioGeneral']);
	Route::get('servicioReforma', ['as' => 'servicioReforma', 'uses' => 'ServiciosController@servicioReforma']);
	Route::get('servicioSancristobal', ['as' => 'servicioSancristobal', 'uses' => 'ServiciosController@servicioSancristobal']);
	Route::get('servicioTuxtla', ['as' => 'servicioTuxtla', 'uses' => 'ServiciosController@servicioTuxtla']);

});


Route::group(['namespace' => 'campus\Contacto'], function(){

	Route::get('contactoPalenque', ['as' => 'contactoPalenque', 'uses' => 'ContactoConstroller@contactoPalenque']);
	Route::get('contactoReforma', ['as' => 'contactoReforma', 'uses' => 'ContactoConstroller@contactoReforma']);
	Route::get('contactoSancristobal', ['as' => 'contactoSancristobal', 'uses' => 'ContactoConstroller@contactoSancristobal']);
	Route::get('contactoTuxtla', ['as' => 'contactoTuxtla', 'uses' => 'ContactoConstroller@contactoTuxtla']);

});


Route::group(['namespace' => 'campus\OfertaEducativa'], function(){

	Route::get('ofertaPalenque', ['as' => 'ofertaPalenque', 'uses' => 'OfertaEducativaController@ofertaPalenque']);
	Route::get('ofertaReforma', ['as' => 'ofertaReforma', 'uses' => 'OfertaEducativaController@ofertaReforma']);
	Route::get('ofertaSancristobal', ['as' => 'ofertaSancristobal', 'uses' => 'OfertaEducativaController@ofertaSancristobal']);
	Route::get('ofertaTuxtla', ['as' => 'ofertaTuxtla', 'uses' => 'OfertaEducativaController@ofertaTuxtla']);

});


Route::group(['namespace' => 'campus\Licenciaturas\LicenciaturaPalenque'], function(){

	Route::get('adminEmpresas', ['as' => 'adminEmpresas', 'uses' => 'LicPalenqueController@adminEmpresas']);
	Route::get('arquitectura', ['as' => 'arquitectura', 'uses' => 'LicPalenqueController@arquitectura']);
	Route::get('adminTuristicas', ['as' => 'adminTuristicas', 'uses' => 'LicPalenqueController@adminTuristicas']);
	Route::get('contaduriaPublica', ['as' => 'contaduriaPublica', 'uses' => 'LicPalenqueController@contaduriaPublica']);
	Route::get('derecho', ['as' => 'derecho', 'uses' => 'LicPalenqueController@derecho']);
	Route::get('enfermeria', ['as' => 'enfermeria', 'uses' => 'LicPalenqueController@enfermeria']);
	Route::get('informatica', ['as' => 'informatica', 'uses' => 'LicPalenqueController@informatica']);
	Route::get('ingenieriaCivil', ['as' => 'ingenieriaCivil', 'uses' => 'LicPalenqueController@ingenieriaCivil']);
	Route::get('ingenieriaTelematica', ['as' => 'ingenieriaTelematica', 'uses' => 'LicPalenqueController@ingenieriaTelematica']);
	Route::get('psicologiaGeneral', ['as' => 'psicologiaGeneral', 'uses' => 'LicPalenqueController@psicologiaGeneral']);

});



Route::group(['namespace' => 'campus\Maestrias\MaestriasPalenque'], function(){

	Route::get('maestriaAdministracion', ['as' => 'maestriaAdministracion', 'uses' => 'MaePalenqueController@mAdministracion']);
	Route::get('maestriaCienciaEducacion', ['as' => 'maestriaCienciaEducacion', 'uses' => 'MaePalenqueController@maestriaCienciaEducacion']);
	Route::get('maestriaComputacion', ['as' => 'maestriaComputacion', 'uses' => 'MaePalenqueController@maestriaComputacion']);
	Route::get('maestriaDerecho', ['as' => 'maestriaDerecho', 'uses' => 'MaePalenqueController@maestriaDerecho']);
	Route::get('maestriaDerechoPenal', ['as' => 'maestriaDerechoPenal', 'uses' => 'MaePalenqueController@maestriaDerechoPenal']);
	Route::get('maestriaFinanzas', ['as' => 'maestriaFinanzas', 'uses' => 'MaePalenqueController@maestriaFinanzas']);

});

Route::group(['namespace' => 'campus\Doctorado\DoctoradoPalenque'], function(){

	Route::get('doctoradoEducacion', ['as' => 'doctoradoEducacion', 'uses' => 'DocController@doctoradoEducacion']);

});
