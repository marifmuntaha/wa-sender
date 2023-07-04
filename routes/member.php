<?php
use Illuminate\Support\Facades\Route;

Route::get('/register', 'AuthController@register')->name('member.register');
Route::get('/login', 'AuthController@login')->name('member.login');
Route::get('/recovery-password', 'AuthController@recovery')->name('member.recovery');
Route::get('/', 'MainController@dashboard')->name('member.dashboard');
