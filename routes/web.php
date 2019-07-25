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
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');//dashboard
Route::get('/account', 'PagesController@account')->name('account');//account
Route::get('/analytics', 'PagesController@analytics')->name('analytics');//analytics
Route::get('/contact', 'PagesController@contact')->name('contact');//contact
Route::get('/news', 'PagesController@news')->name('news');//news
Route::get('/benchmark', 'PagesController@benchmark')->name('benchmark');//news

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


