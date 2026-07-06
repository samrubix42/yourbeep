<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/home', 'pages::home');
Route::livewire('/courses', 'pages::home')->name('courses.index');
