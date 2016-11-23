<?php  
	
Route::get('serviciosGeneral', ['as' => 'serviciosGeneral', 'uses' => 'ServiciosController@servicioGeneral']);
Route::get('servicioReforma', ['as' => 'servicioReforma', 'uses' => 'ServiciosController@servicioReforma']);
Route::get('servicioSancristobal', ['as' => 'servicioSancristobal', 'uses' => 'ServiciosController@servicioSancristobal']);
Route::get('servicioTuxtla', ['as' => 'servicioTuxtla', 'uses' => 'ServiciosController@servicioTuxtla']);

?>