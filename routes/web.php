<?php


Route::get('/', function () {
    return view('layout.home');
});

Route::resource('cars','CarController');
