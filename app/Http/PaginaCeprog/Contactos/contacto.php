<?php  

Route::get('contactoPalenque', ['as' => 'contactoPalenque', 'uses' => 'ContactoConstroller@contactoPalenque']);
Route::get('contactoReforma', ['as' => 'contactoReforma', 'uses' => 'ContactoConstroller@contactoReforma']);
Route::get('contactoSancristobal', ['as' => 'contactoSancristobal', 'uses' => 'ContactoConstroller@contactoSancristobal']);
Route::get('contactoTuxtla', ['as' => 'contactoTuxtla', 'uses' => 'ContactoConstroller@contactoTuxtla']);

?>