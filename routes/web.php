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
Route::match(['post','get'],'/', function () {
    return view('welcome');
});

Route::match(['post','get'],'/home', function() {
    return view('client/dashboard');
});

Route::get('/consumption', function() {
    return view('client/consumption');
});

// Route::get('/facture', function () {
//     return view('client/facture');
// });

// Route::post('/home', function() {
//     return view('client/client');
// });

// Route::get('/home', function() {
//     return view('client/client');
// });

// Route::get('/invoice', function() {
//     return view('client/factures');
// });

Route::get('/invoices_paid', function() {
    return view('client/paidInvoices');
});

Route::get('/unpaid_invoices', function() {
    return view('client/unpaidInvoices');
});

Route::get('/user', function() {
    return view('client/user');
});

Route::get('/tchat', function() {
    return view('client/message');
});

Route::match(['post','get'],'/preview/clauses', function() {
    return view('/clauses');
});

Route::get('/clauses', function() {
    return view('client/clauses');
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

Route::match(['get','post'],'/admin/customer/addCustomer', function() {
    return view('admin/addCustomer');
});

Route::get('/admin/administrator', function() {
    return view('admin/administrator');
});

Route::match(['get','post'],'/admin/administrator/addAdministrator', function() {
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

Route::match(['get','post'],'/admin/add', function() {
    return view('admin/add');
});

Route::match(['get','delete'],'/admin/remove', function() {
    return view('admin/remove');
});

Route::get('/admin/stock', function() {
    return view('admin/stock');
});

Route::get('/admin/clauses', function() {
    return view('admin/adminClauses');
});