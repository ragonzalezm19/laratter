<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('/messages/{message}', 'MessagesController@show');

Route::post('/messages/create', 'MessagesController@create')->middleware('auth');

Auth::routes();
Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');

Route::get('/user/{username}/follows', 'UsersController@follows');
Route::get('/user/{username}/followers', 'UsersController@followers');
Route::post('/user/{username}/follow', 'UsersController@follow');
Route::post('/user/{username}/unfollow', 'UsersController@unfollow');
Route::get('/user/{username}', 'UsersController@show');


