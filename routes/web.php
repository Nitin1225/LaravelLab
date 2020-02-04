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

Route::get('/','Controller@home')->name('home');

Route::get('/about', 'Controller@about')->name('about');

Route::get('/projects', 'Controller@projects')->name('projects');

Route::get('/faq', 'Controller@faq')->name('faq');

Route::get('/register', 'Controller@register')->name('register');

Route::post('/user/welcome', 'Controller@userWelcome')->name('userWelcome');