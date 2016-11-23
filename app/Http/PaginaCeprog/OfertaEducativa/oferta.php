<?php 


Route::get('ofertaPalenque', ['as' => 'ofertaPalenque', 'uses' => 'OfertaEducativaController@ofertaPalenque']);
Route::get('ofertaReforma', ['as' => 'ofertaReforma', 'uses' => 'OfertaEducativaController@ofertaReforma']);
Route::get('ofertaSancristobal', ['as' => 'ofertaSancristobal', 'uses' => 'OfertaEducativaController@ofertaSancristobal']);
Route::get('ofertaTuxtla', ['as' => 'ofertaTuxtla', 'uses' => 'OfertaEducativaController@ofertaTuxtla']);


 ?>