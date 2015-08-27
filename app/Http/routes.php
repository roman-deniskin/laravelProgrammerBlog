<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('page');
});

Route::resource('page', 'ArticleResourceController');

Route::get('redirectToProvider', function () {
    return Socialize::with('facebook')->redirect();
});

Route::get('handleProviderCallback', function () {
    $user = Socialize::with('facebook')->user();
    // $user->token;
});