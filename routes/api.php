<?php
use App\Http\Controllers\InformationController;
use App\Http\Controllers\EmpresabController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('Information', 'App\Http\Controllers\InformationController');
Route::apiResource('Empresa', 'App\Http\Controllers\EmpresabController');


