<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dataTable', function () {
    return view('dataTable');
});
Route::get('/lineCharts', function () {
    return view('lineCharts');
});
Route::get('/htmlToPdf', function () {
    return view('htmlToPdf');
});
