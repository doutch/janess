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

Route::get('/', ['as' => 'home',function () {
    return View::make('accueil');
}]);

Route::get('services', ['as' => 'services',function () {
    return View::make('services');
}]);

Route::get('specialites', ['as' => 'specialites',function () {
    return View::make('specialites');
}]);

Route::get('prestations', ['as' => 'prestations',function () {
    return View::make('prestations');
}]);

Route::get('photos', ['as' => 'photos','uses' => 'PhotoController@index']);

Route::get('galerie_video', ['as' => 'galerie_video',function () {
    return View::make('videos');
}]);

Route::get('references', ['as' => 'references',function () {
    return View::make('references');
}]);

Route::get('contact', ['as' => 'contact','uses' => 'ContactController@create']);

Route::post('contact', ['as' => 'contact_message_envoye', 'uses' => 'ContactController@store']);

//Commentaires du livre d'or
Route::get('livre_dor', ['as' => 'livre_dor','uses' => 'CommentController@index']);

Route::get('create_comment', ['as' => 'create_comment','uses' => 'CommentController@create']);
Route::post('create_comment', ['as' => 'comment_envoye', 'uses' => 'CommentController@store']);

//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


// Dashboard route 
Route::get('dashboard/livre_dor/comment', 'CommentController@showToDashborad');

 
// Applies auth filter to the routes within admin/ 
//Route::when('userpanel/*', 'auth');
