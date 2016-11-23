<?php 


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

 ?>