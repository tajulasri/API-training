<?php

//login route for our API
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'ApiAuthenticationController@login');
    Route::post('logout', 'ApiAuthenticationController@logout')->middleware('jwt.auth');
    Route::post('refresh', 'ApiAuthenticationController@refresh')->middleware('jwt.auth');
    Route::post('me', 'ApiAuthenticationController@me')->middleware('jwt.auth');
});

//route for version 1.0 padu APIc
Route::group(['prefix' => 'v1', 'namespace' => 'v1'], function () {
    // Route::get('/categories')
    //     ->uses('CategoryController@index');
    Route::resource('products', ProductController::class);

});

//route for version 2.0 our padu API
Route::group(['prefix' => 'v2', 'namespace' => 'v2'], function () {
    // Route::get('/categories')
    //     ->uses('CategoryController@index');
    Route::resource('products', ProductController::class);

});
