<?php  

Route::get('palenqueHome', ['as' => 'palenqueHome', 'uses' => 'AdminCampusController@palenqueHome']);
Route::get('reformaHome', ['as' => 'reformaHome', 'uses' => 'AdminCampusController@reformaHome']);
Route::get('sancristobalHome', ['as' => 'sancristobalHome', 'uses' => 'AdminCampusController@sancristobalHome']);
Route::get('tuxtlaHome', ['as' => 'tuxtlaHome', 'uses' => 'AdminCampusController@tuxtlaHome']);
Route::get('admision', ['as' => 'admision', 'uses' => 'AdminCampusController@admision']);


?>