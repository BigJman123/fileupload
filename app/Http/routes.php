<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::Auth();
Route::get('/', 'UploadController@index');
Route::get('upload', 'UploadController@create');
Route::post('/upload', 'UploadController@fileUpload');












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
Route::auth();

Route::get('/home', 'HomeController@index');
