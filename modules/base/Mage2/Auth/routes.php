<?php

/*
  |--------------------------------------------------------------------------
  | Mage2 Auth Module Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an mage2 auth modules.
  | It's a breeze. Simply tell mage2 auth module the URI it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::group(['middleware' => ['web', 'adminauth','website'], 'namespace' => "Mage2\Auth\Controllers\Admin"], function () {

  Route::get('/admin/login', ['as' => 'admin.login', 'uses' => 'LoginController@showLoginForm']);
  Route::post('/admin/login', ['as' => 'admin.login.post', 'uses' => 'LoginController@login']);

  Route::get('/admin/logout', ['as' => 'admin.logout', 'uses' => 'LoginController@logout']);


});



Route::group(['middleware' => ['frontauth','web','website'],  'namespace' => "Mage2\Auth\Controllers"] ,  function () {

});
