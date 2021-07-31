<?php

use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManageClientController;

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

Route::get('/home',[ManageClientController::class, 'dashboard'])->name('clientHome');

Route::get('/user',[ManageClientController::class, 'setting'])->name('userSetting');

Route::get('/user/editProfile',[ManageClientController::class, 'updateUser'])->name('userEditProfile');

Route::match(['get','put'],'/client/update',[ManageClientController::class, 'update'])->name('updateClient');

Route::get('/invoices_paid',[ManageClientController::class, 'invoicePaid'])->name('userEditProfile');

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

// Route::get('/invoices_paid', function() {
//     return view('client/paidInvoices');
// });

Route::get('/unpaid_invoices', function() {
    return view('client/unpaidInvoices');
});

// Route::get('/user', function() {
//     return view('client/user');
// });

Route::get('/tchat', function() {
    return view('client/message');
});

Route::get('/preview/clauses',[UtilisateurController::class, 'previewClauses'])->name('seeClauses');

Route::post('/preview/clauses/validation',[UtilisateurController::class, 'validClauses']);

Route::get('/clauses', function() {
    return view('client/clauses');
});


//Admin route

Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('adminHome');

Route::get('/admin/consumption',[AdminController::class, 'allInvoices'])->name('allInvoices');

Route::get('/admin/detail-consumption/{invoice_id}/edit',[AdminController::class, 'detailInvoive'])->name('detailInvoive');

Route::post('/admin/facture/{invoice_id}',[AdminController::class, 'updateInvoice'])->name('updateInvoice');

Route::get('/admin/paid/{invoice_id}',[AdminController::class, 'finishToPaidInvoice'])->name('finishToPaidInvoice');

Route::get('/admin/customer',[ManageAdminController::class, 'viewCustomers']);

Route::get('/admin/customer/addCustomer',[ManageAdminController::class, 'addCustomers']);

Route::post('/admin/customer/addCustomer/store',[ManageAdminController::class, 'storeCustomers']);

Route::get('/admin/administrator',[ManageAdminController::class, 'viewAdministrators']);

Route::get('/admin/administrator/addAdministrator',[ManageAdminController::class, 'addAdministrators']);

Route::post('/admin/administrator/addAdministrator/store',[ManageAdminController::class, 'storeAdministrators']);

Route::get('/admin/facture',[AdminController::class, 'allClient']);

Route::post('/admin/facture',[AdminController::class, 'addInvoice']);

Route::get('/admin/status',[AdminController::class, 'adminStatus'])->name('adminStatus');

Route::get('/admin/chat',[AdminController::class, 'adminChat'])->name('adminChat');

Route::get('/admin/manage_products',[AdminController::class, 'manageProducts'])->name('manageProducts');

Route::post('/admin/manage_products/add',[AdminController::class, 'storeProduct'])->name('adminAddStore');

Route::get('/admin/manage_products/remove',[AdminController::class, 'adminRemove'])->name('adminRemove');

Route::get('/admin/products_types',[AdminController::class, 'productsType'])->name('productsType');

Route::post('/admin/products_types/create',[AdminController::class, 'createType'])->name('createType');

// Route::delete('/admin/remove',[AdminController::class, 'deleteProduct'])->name('adminDelete');

Route::get('/admin/stock/{id}',[AdminController::class, 'viewStock'])->name('viewStock');

Route::get('/admin/clauses',[AdminController::class, 'adminClauses'])->name('adminClauses');

Route::get('/admin/profile',[AdminController::class, 'adminProfile'])->name('adminProfile');

Route::get('/admin/editProfile',[AdminController::class, 'adminEditProfile'])->name('adminEditProfile');

Route::match(['get','put'],'/admin/update',[AdminController::class, 'updateAdmin'])->name('updateAdmin');

Route::match(['get','put'],'/admin/customer/block/{id}/{status}',[ManageAdminController::class, 'blockCustomer'])->name('blockCustomer');

Route::match(['get','put'],'/admin/administrator/block/{id}/{status}',[ManageAdminController::class, 'blockAdmin'])->name('blockAdmin');

Route::get('/admin/customer/edit/{id}',[ManageAdminController::class, 'editCustomer'])->name('editCustomer');

Route::get('/admin/administrator/edit/{id}',[ManageAdminController::class, 'editAdmin'])->name('editAdmin');

Route::match(['get','put'],'/admin/customer/saveCustomer/{id}',[ManageAdminController::class, 'saveCustomer'])->name('saveCustomer');

Route::match(['get','put'],'/admin/administrator/saveAdmin/{id}',[ManageAdminController::class, 'saveAdmin'])->name('saveAdmin');

// Route::get('/admin/clauses', function() {
//     return view('admin/adminClauses');
// });

Route::get('/admin/map', function() {
    return view('admin/maps');
});

Route::match(['get','put'],'/admin/customer/delete/{id}',[ManageAdminController::class, 'deleteCustomer'])->name('deleteCustomer');

Route::match(['get','put'],'/admin/administrator/delete/{id}',[ManageAdminController::class, 'deleteAdmin'])->name('deleteAdmin');
