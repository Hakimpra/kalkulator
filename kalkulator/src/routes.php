<?php

Route::get('kal', function(){
	echo 'Hello from the calculator package!';
});

Route::get('tambah/{a}/{b}', 'Hakimpra\Kalkulator\KalController@tambah');
Route::get('kurang/{a}/{b}', 'Hakimpra\Kalkulator\KalController@kurang');
Route::get('kali/{a}/{b}', 'Hakimpra\Kalkulator\KalController@kali');
Route::get('bagi/{a}/{b}', 'Hakimpra\Kalkulator\KalController@bagi');
// Route::get('bagi/{a}/{b}', 'Hakimpra\Kalkulator\KalController@bagi');