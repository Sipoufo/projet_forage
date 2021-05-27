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
    return view('welcome');
});

Route::get('/facture', function () {
    return view('Client/facture');
});

Route::get('/home', function() {
    return view('Client/client');
});

Route::get('/invoice', function() {
    return view('Client/factures');
});

Route::get('/user', function() {
    return view('Client/user');
});

Route::get('/message', function() {
    return view('Client/message');
});

Route::get('/admin/home', function() {
    return view('admin/dashboard');
});

Route::get('/admin/consumption', function() {
    return view('admin/consumption');
});

Route::get('/admin/customer', function() {
    return view('admin/customer');
});

Route::get('/admin/facture', function() {
    return view('admin/facture');
});

Route::get('/admin/status', function() {
    return view('admin/status');
});

Route::get('/admin/chat', function() {
    return view('admin/chat');
});

Route::get('/admin/add', function() {
    return view('admin/add');
});

Route::get('/admin/remove', function() {
    return view('admin/remove');
});

Route::get('/admin/stock', function() {
    return view('admin/stock');
});