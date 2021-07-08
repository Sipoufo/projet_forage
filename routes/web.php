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
//Client
Route::get('/', function () {
    return view('welcome');
});

Route::match(['post','get'],'/client/home', function() {
    return view('client/dashboard');
});

Route::get('/facture', function () {
    return view('client/facture');
});

Route::post('/home', function() {
    return view('client/client');
});

Route::get('/home', function() {
    return view('client/client');
});

Route::get('/invoice', function() {
    return view('client/factures');
});

Route::get('/user', function() {
    return view('client/user');
});

Route::get('/message', function() {
    return view('client/message');
});


//Admin route
Route::match(['post','get'],'/admin/home', function() {
    return view('admin/dashboard');
});

Route::get('/admin/consumption', function() {
    return view('admin/consumption');
});

Route::get('/admin/customer', function() {
    return view('admin/customer');
});

Route::get('/admin/customer/addCustomer', function() {
    return view('admin/addCustomer');
});

Route::get('/admin/administrator', function() {
    return view('admin/administrator');
});

Route::get('/admin/administrator/addAdministrator', function() {
    return view('admin/addAdministrator');
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

Route::post('/admin/add', function() {
    return view('admin/add');
});

Route::post('/admin/remove', function() {
    return view('admin/remove');
});

Route::get('/admin/stock', function() {
    return view('admin/stock');
});
