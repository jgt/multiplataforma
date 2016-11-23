<?php 

Route::get('maestriaAdministracion', ['as' => 'maestriaAdministracion', 'uses' => 'MaePalenqueController@maestriaAdministracion']);
Route::get('maestriaCienciaEducacion', ['as' => 'maestriaCienciaEducacion', 'uses' => 'MaePalenqueController@maestriaCienciaEducacion']);
Route::get('maestriaComputacion', ['as' => 'maestriaComputacion', 'uses' => 'MaePalenqueController@maestriaComputacion']);
Route::get('maestriaDerecho', ['as' => 'maestriaDerecho', 'uses' => 'MaePalenqueController@maestriaDerecho']);
Route::get('maestriaDerechoPenal', ['as' => 'maestriaDerechoPenal', 'uses' => 'MaePalenqueController@maestriaDerechoPenal']);
Route::get('maestriaFinanzas', ['as' => 'maestriaFinanzas', 'uses' => 'MaePalenqueController@maestriaFinanzas']);


 ?>