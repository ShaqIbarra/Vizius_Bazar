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

Route::get('/', function () {
    return view('web.index');
});

Route::get('/about', function () {
    return view('web.about');
});

Route::get('/title', function () {
    return view('web.title');
});

Route::get('/escrow', function () {
    return view('web.escrow');
});

Route::get('/international', function () {
    return view('web.international');
});

Route::get('/insurance', function () {
    return view('web.insurance');
});

Route::get('/contact', function () {
    return view('web.contact');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
  Route::get('/', 'HomeController@index');
  Route::resource('transactions', 'TransactionsController');
  Route::get('/transactions/downloadPDF/{id}','TransactionsController@downloadPDF')->name('transaction.downloadPDF');
  Route::get('/transactions/watchPDF/{id}','TransactionsController@watchPDF')->name('transaction.watchPDF');
  Route::get('transaction/create/{id}', 'TransactionsController@createTransaction')->name('transaction.create');
  // Route::resource('account_information', 'UserAccountInformationController');
  // Route::get('user_account_information/create_investment/{id}', 'UserAccountInformationController@createInvestment')->name('user_account_information.create_investment');
  Route::resource('users', 'UsersController');
});
