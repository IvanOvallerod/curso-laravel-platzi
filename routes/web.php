<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ExpenseReportController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
;
Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [DashboardController::class, 'index']);

Route::resource('/expense_reports', ExpenseReportController::class);

/*Route::get('/test', function () {
    return view('test', [ 
        'title' => 'CURSO LARAVEL PLATZI' 
    ]);
});*/