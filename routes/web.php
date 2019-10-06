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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Rutas para objetos de datos
Route::resource('companies', 'CompanyController')->middleware('auth');
Route::resource('workspace', 'WorkspaceController')->middleware('auth');
Route::resource('providers', 'ProviderController')->middleware('auth');
Route::resource('clients', 'ClientController')->middleware('auth');
Route::resource('bank_accounts', 'BankAccountController')->middleware('auth');
Route::resource('accounting_accounts', 'AccountingAccountController')->middleware('auth');
