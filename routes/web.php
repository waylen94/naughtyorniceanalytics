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
// homepage
Route::get('/', 'PagesController@show')->name('homepage');//dashboard
Route::get('/dashboard/{user}', 'PagesController@dashboard')->name('dashboard');//dashboard
Route::get('/account/{user}', 'PagesController@account')->name('account');//account
Route::get('/analytics/{user}', 'PagesController@analytics')->name('analytics');//analytics
Route::get('/contact/{user}', 'PagesController@contact')->name('contact');//contact
Route::get('/newsshow/{user}', 'PagesController@news')->name('newsshow');//news
Route::get('/benchmark/{user}', 'PagesController@benchmark')->name('benchmark');//news


Route::get('testingtable', 'TestingController@showTable')->name('testing.table'); //testing table

// authentication routers
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// register routers
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// resetting password routers
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email validation routers
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('hotels', 'HotelsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');



Route::resource('news', 'NewsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);



