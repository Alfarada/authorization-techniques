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

use Symfony\Component\HttpFoundation\Response;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function ()
{   
    if (auth()->user()->admin) {
        return view('/admin/dashboard');   
    } else {
        return response('You shell NOT pass!', Response::HTTP_FORBIDDEN);
    }
})->name('admin_dashboard')->middleware('auth');
