<?php  

Route::get('galeriaPalenque', ['as' => 'galeriaPalenque', 'uses' => 'GaleriaControllers@galeriaPalenque']);
Route::get('galeriaReforma', ['as' => 'galeriaReforma', 'uses' => 'GaleriaControllers@galeriaReforma']);
Route::get('galeriaSancristobal', ['as' => 'galeriaSancristobal', 'uses' => 'GaleriaControllers@galeriaSancristobal']);
Route::get('galeriaTuxtla', ['as' => 'galeriaTuxtla', 'uses' => 'GaleriaControllers@galeriaTuxtla']);


?>