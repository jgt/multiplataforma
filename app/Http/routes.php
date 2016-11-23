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
	require __DIR__ .'/PaginaCeprog\Campus\campus.php';
});
Route::group(['namespace' => 'campus\Galerias'], function(){
	require __DIR__ .'/PaginaCeprog\Galerias\galeria.php';
});
Route::group(['namespace' => 'campus\Servicios'], function(){
	require __DIR__ .'/PaginaCeprog\Servicios\servicio.php';
});
Route::group(['namespace' => 'campus\Contacto'], function(){
	require __DIR__ .'/PaginaCeprog\Contactos\contacto.php';	
});
Route::group(['namespace' => 'campus\OfertaEducativa'], function(){
	require __DIR__ .'/PaginaCeprog\OfertaEducativa\oferta.php';
});
Route::group(['namespace' => 'campus\Licenciaturas\LicenciaturaPalenque'], function(){
	require __DIR__ .'/PaginaCeprog\LicenciaturaPalenque\licenciatura.php';
});
Route::group(['namespace' => 'campus\Maestrias\MaestriasPalenque'], function(){
	require __DIR__ .'/PaginaCeprog\MaestriasPalenque\maestria.php';
});

Route::group(['namespace' => 'campus\Doctorado\DoctoradoPalenque'], function(){

	Route::get('doctoradoEducacion', ['as' => 'doctoradoEducacion', 'uses' => 'DocController@doctoradoEducacion']);

});

Route::group(['namespace' => 'campus\Licenciaturas\LicenciaturaReforma'], function(){

Route::get('adminEmpresasReforma', ['as' => 'adminEmpresasReforma', 'uses' => 'LicReformaController@adminEmpresas']);
Route::get('contaduriaPublicaReforma', ['as' => 'contaduriaPublicaReforma', 'uses' => 'LicReformaController@contaduriaPublica']);
Route::get('informaticaReforma', ['as' => 'informaticaReforma', 'uses' => 'LicReformaController@informatica']);
Route::get('psicologiaGeneralReforma', ['as' => 'psicologiaGeneralReforma', 'uses' => 'LicReformaController@psicologiaGeneral']);
Route::get('derechoReforma', ['as' => 'derechoReforma', 'uses' => 'LicReformaController@derecho']);

});

Route::group(['namespace' => 'campus\Maestrias\MaestriasReforma'], function(){

Route::get('maestriaCienciaEducacionReforma', ['as' => 'maestriaCienciaEducacionReforma', 'uses' => 'MaeReformaController@cienciaEducacion']);

});

Route::group(['namespace' => 'campus\Licenciaturas\LicenciaturasSancristobal'], function(){

Route::get('adminEmpresasSancristobal', ['as' => 'adminEmpresasSancristobal', 'uses' => 'LicSancristobalController@adminEmpresas']);
Route::get('adminEmpresasTuristicaSancristobal', ['as' => 'adminEmpresasTuristicaSancristobal', 'uses' => 'LicSancristobalController@adminEmpresasTuristica']);
Route::get('arquitecturaSancristobal', ['as' => 'arquitecturaSancristobal', 'uses' => 'LicSancristobalController@arquitectura']);
Route::get('contaduriaPublicaSancristobal', ['as' => 'contaduriaPublicaSancristobal', 'uses' => 'LicSancristobalController@contaduriaPublica']);
Route::get('derechoSancristobal', ['as' => 'derechoSancristobal', 'uses' => 'LicSancristobalController@derecho']);
Route::get('informaticaSancristobal', ['as' => 'informaticaSancristobal', 'uses' => 'LicSancristobalController@informatica']);
Route::get('psicologiaGeneralSancristobal', ['as' => 'psicologiaGeneralSancristobal', 'uses' => 'LicSancristobalController@psicologiaGeneral']);

});


Route::group(['namespace' => 'campus\Maestrias\MaestriaSancristobal'], function(){

Route::get('maestriaAdministracionSancristobal', ['as' => 'maestriaAdministracionSancristobal', 'uses' => 'MaeSancristobalController@administracion']);
Route::get('maestriaComputacionSancristobal', ['as' => 'maestriaComputacionSancristobal', 'uses' => 'MaeSancristobalController@computacion']);
Route::get('maestriaDerechoConstitucionalSancristobal', ['as' => 'maestriaDerechoConstitucionalSancristobal', 'uses' => 'MaeSancristobalController@derechoConstitucional']);
Route::get('maestriaFinanzasSancristobal', ['as' => 'maestriaFinanzasSancristobal', 'uses' => 'MaeSancristobalController@finanzas']);

});
