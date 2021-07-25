<?php

use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;

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

// Global routes 
Route::get('/logout',[LogoutController::class, 'logout']);

Route::get('/',[HomeController::class, 'sign_in'])->name('welcome');

Route::post('/login',[HomeController::class, 'login']);

Route::get('/forgot_password',[HomeController::class, 'forgot_password']);

Route::post('/reset',[HomeController::class, 'reset']);



//Client

Route::get('/home',[HomeController::class, 'clientHome'])->name('clientHome');

Route::get('/consumption', function() {
    return view('client/consumption');
});

Route::get('/paidInvoice', function() {
    return view('client/consumption');
});

//[AuthController::class, 'login']
Route::get('/allInvoice', 'App\Http\Controllers\UtilisateurController@allInvoicesOfClient');

Route::get('/avanceInvoice', function() {
    return view('client/consumption');
});
/*
Route::get('/consumption/monthly', function() {
    $data = "donné";
    return view('client/consumption') -> with('donne', $data);
});*/

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

// Route::match(['post','get'],'/preview/clauses', function() {
//     return view('/clauses');
// });

Route::get('/preview/clauses',[UtilisateurController::class, 'previewClauses'])->name('seeClauses');

Route::post('/preview/clauses/validation',[UtilisateurController::class, 'validClauses']);

Route::get('/clauses', function() {
    return view('client/clauses');
});


//Admin route

Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('adminHome');

Route::get('/admin/consumption',[AdminController::class, 'adminConsumption'])->name('adminConsumption');

Route::get('/admin/customer',[ManageAdminController::class, 'viewCustomers']);

Route::get('/admin/customer/addCustomer',[ManageAdminController::class, 'addCustomers']);

Route::post('/admin/customer/addCustomer/store',[ManageAdminController::class, 'storeCustomers']);

Route::get('/admin/administrator',[ManageAdminController::class, 'viewAdministrators']);

Route::get('/admin/administrator/addAdministrator',[ManageAdminController::class, 'addAdministrators']);

Route::post('/admin/administrator/addAdministrator/store',[ManageAdminController::class, 'storeAdministrators']);

Route::get('/admin/facture',[UtilisateurController::class, 'allClient']);

Route::post('/admin/facture',[UtilisateurController::class, 'addInvoice']);

Route::get('/admin/status',[AdminController::class, 'adminStatus'])->name('adminStatus');

Route::get('/admin/chat',[AdminController::class, 'adminChat'])->name('adminChat');

Route::get('/admin/add',[AdminController::class, 'adminAdd'])->name('adminAdd');

Route::post('/admin/add/store',[AdminController::class, 'storeProduct'])->name('adminAddStore');

Route::get('/admin/remove',[AdminController::class, 'adminRemove'])->name('adminRemove');

Route::delete('/admin/remove',[AdminController::class, 'deleteProduct'])->name('adminDelete');

Route::get('/admin/stock',[AdminController::class, 'adminStock'])->name('adminStock');

Route::get('/admin/clauses',[AdminController::class, 'adminClauses'])->name('adminClauses');

Route::get('/admin/profile',[AdminController::class, 'adminProfile'])->name('adminProfile');

Route::get('/admin/editProfile',[AdminController::class, 'adminEditProfile'])->name('adminEditProfile');

Route::match(['get','put'],'/admin/update',[AdminController::class, 'updateAdmin'])->name('updateAdmin');

Route::match(['get','put'],'/admin/customer/block/{id}',[ManageAdminController::class, 'blockCustomer'])->name('blockCustomer');

Route::match(['get','put'],'/admin/customer/activate/{id}',[ManageAdminController::class, 'activateCustomer'])->name('activateCustomer');

Route::get('/admin/customer/edit/{id}',[ManageAdminController::class, 'editCustomer'])->name('editCustomer');

Route::match(['get','put'],'/admin/customer/saveCustomer/{id}',[ManageAdminController::class, 'saveCustomer'])->name('saveCustomer');

Route::match(['get','put'],'/admin/customer/delete/{id}',[ManageAdminController::class, 'deleteCustomer'])->name('deleteCustomer');