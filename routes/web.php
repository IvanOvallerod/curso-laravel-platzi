<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ExpenseReportController;
use \App\Http\Controllers\ExpenseController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\ExpenseReportController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [DashboardController::class, 'index']);

Route::resource('/expense_reports', ExpenseReportController::class);
Route::get('/expense_reports/{id}/confirmDelete', [ExpenseReportController::class, 'confirmDelete']);
Route::get('/expense_reports/{id}/confirmSendMail', [ExpenseReportController::class, 'confirmSendMail']);
Route::post('/expense_reports/{id}/SendMail', [ExpenseReportController::class, 'SendMail']);

Route::get('/expense_reports/{expense_report}/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expense_reports/{expense_report}/expenses', [ExpenseController::class, 'store']);

//Route::get('/expense_reports/{expense_report}/expenses/create', 'App\Http\Controllers\ExpenseController@create')->name('create');
//Route::get('/expense_reports/{expense_report}/expenses/', 'App\Http\Controllers\ExpenseController@store')->name('store');



//Route::get('/expense_reports/{expense_report}/expenses/create', [ExpenseController::class, 'create']);
//Route::post('/expense_reports/{expense_report}/expenses', [ExpenseController::class, 'store']);
//Route::get('/expense_reports/{expense_report}/expenses/create', 'ExpenseController@create');
//Route::post('/expense_reports/{expense_report}/expenses', 'ExpenseController@store');



/*Route::get('/test', function () {
    return view('test', [ 
        'title' => 'CURSO LARAVEL PLATZI' 
    ]);
});*/

