<?php

Route::Auth();
Route::get('/', 'UploadController@index');
Route::get('upload', 'UploadController@create');
Route::get('upload/{id}', ['uses' => 'UploadController@show', 'as' => 'upload.show']);
Route::post('/upload', ['uses' => 'UploadController@store', 'as' => 'upload.store']);
Route::get('/download/{hash}', ['uses' => 'DownloadController@show', 'as' => 'download.show']);




// Route::get('/download/{hash}', ['uses' => 'DownloadController@show', 'as' => 'download.show'])
	// in download controller do Upload::findByHash($hash), then let them download it or whatever
	// or for now just say YES THE FILE EXISTS






// Route::get('secure', function() {
//    $random = random_bytes(15);
   
//    var_dump(bin2hex($random));
// });
// Route::get('route', function() {
//    $route = url('file', str_random(30));
   
//    var_dump($route);
// });
// Route::get('url', function() {
//    $url = route(str_random(30));
   
//    var_dump($url);
// });