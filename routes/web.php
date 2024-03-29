<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expense_reports', 'ExpenseReportController');
Route::get('/expense_reports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');
Route::get('/expense_reports/{id}/confirmSendEmail', 'ExpenseReportController@confirmSendEmail');
Route::post('/expense_reports/{id}/sendEmail', 'ExpenseReportController@sendEmail');

Route::get('/expense_reports/{id}/expenses/create', 'ExpenseController@create');
Route::post('/expense_reports/{id}/expenses', 'ExpenseController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
