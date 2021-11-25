<?php

use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManageClientController;
use App\Http\Middleware\CheckSession;

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

Route::get('/',[HomeController::class, 'sign_in'])->name('welcome');

Route::post('/login',[HomeController::class, 'login']);

Route::get('/forgot_password',[HomeController::class, 'forgot_password']);

Route::post('/reset',[HomeController::class, 'reset']);



Route::group(['middleware' => 'checksession'], function () {

        // Global routes
		Route::get('/logout',[LogoutController::class, 'logout']);


		//Client

		Route::get('/home',[ManageClientController::class, 'dashboard'])->name('clientHome');

		Route::get('/user',[ManageClientController::class, 'setting'])->name('userSetting');

		Route::match(['get','put'],'/user/change_password',[ManageClientController::class, 'changePassword'])->name('changePassword');

		Route::match(['get','put'],'/user/update',[ManageClientController::class, 'update'])->name('updateClient');

		Route::get('/invoices_paid',[ManageClientController::class, 'invoicePaid'])->name('userEditProfile');

		Route::get('/unpaid_invoices',[ManageClientController::class, 'invoiceUnPaid'])->name('userEditProfile');

		Route::match(['get','put'],'/paidfact',[ManageClientController::class, 'paidFac']);

		Route::get('/budget-stat',[ManageClientController::class, 'budget'])->name('budget-stat');

		Route::get('/budget-detail',[ManageClientController::class, 'budget_detail'])->name('budget-detail');

		Route::get('/user/print/{invoice_id}',[ManageClientController::class, 'print']);

		Route::get('/user/get/{invoice_id}',[ManageClientController::class, 'overview']);

		Route::get('/consumption', function() {
		    return view('client/consumption');
		});

		Route::get('/paidInvoice', function() {
		    return view('client/consumption');
		});

		//[AuthController::class, 'login']
		Route::get('/allInvoice', 'App\Http\Controllers\UtilisateurController@allInvoicesOfClient');

		// Route::get('/avanceInvoice', function() {
		//     return view('client/consumption');
		// });
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

		// Route::get('/unpaid_invoices', function() {
		//     return view('client/unpaidInvoices');
		// });

		// Route::get('/user', function() {
		//     return view('client/user');
		// });

		Route::get('/clauses', function() {
		    return view('client/clauses');
		});


		//Admin route

		Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('adminHome');

		Route::get('/admin/customer',[ManageAdminController::class, 'viewCustomers']);

		Route::get('/admin/customer/addCustomer',[ManageAdminController::class, 'addCustomers']);

		Route::post('/admin/customer/addCustomer/store',[ManageAdminController::class, 'storeCustomers']);

		Route::match(['get','post'], '/admin/customer/location', [ManageAdminController::class, 'location']);

		Route::get('/admin/administrator',[ManageAdminController::class, 'viewAdministrators']);

		Route::get('/admin/administrator/addAdministrator',[ManageAdminController::class, 'addAdministrators']);

		Route::post('/admin/administrator/addAdministrator/store',[ManageAdminController::class, 'storeAdministrators']);

		

		Route::get('/admin/facture',[AdminController::class, 'allClient']);

		Route::post('/admin/facture/addInvoice',[AdminController::class, 'addOneInvoice'])->name('addOneInvoice');

		Route::match(['post','get'],'/admin/invoice/addInformation',[AdminController::class, 'adminInvoiceInformation']);

		Route::match(['post','get'],'/admin/facture/search_custumer',[AdminController::class, 'adminSearchInvoiceByCustumer']);

		Route::post('/admin/paidInvoce',[ManageAdminController::class, 'paidInvoice']);

		Route::post('/admin/search_invoices',[AdminController::class, 'searchByMonthOrYear'])->name('searchByMonthOrYear');


		Route::get('/admin/consumption',[AdminController::class, 'allInvoices'])->name('allInvoices');

		Route::get('/admin/consumption/page/{page_size}/size/{size}',[AdminController::class, 'searchAll'])->name('searchAll');


		Route::get('/admin/consumption-that-are-paid',[AdminController::class, 'allPaidInvoices'])->name('allPaidInvoices');

		Route::get('/admin/consumption-that-are-paid/page/{page_size}/size/{size}',[AdminController::class, 'searchAllPaid'])->name('searchAllPaid');


		Route::get('/admin/consumption-that-are-unpaid',[AdminController::class, 'allUnPaidInvoices'])->name('allUnPaidInvoices');

		Route::get('/admin/consumption-that-are-unpaid/page/{page_size}/size/{size}',[AdminController::class, 'searchAllUnPaid'])->name('searchAllUnPaid');


		Route::get('/admin/detail-consumption/{invoice_id}/edit',[AdminController::class, 'detailInvoive'])->name('detailInvoive');

<<<<<<< HEAD
		Route::put('/admin/detail-consumption',[AdminController::class, 'detailInvoive'])->name('detailInvoive');
=======
        Route::get('/admin/customer/blockedCustomer',[ManageAdminController::class, 'blockedCustomers']);

		Route::post('/admin/customer/addCustomer/store',[ManageAdminController::class, 'storeCustomers']);
>>>>>>> 6e695ce05158f9bb1652866c9ca48068c7dbf590

		Route::post('/admin/facture/{invoice_id}',[AdminController::class, 'updateInvoice'])->name('updateInvoice');

		Route::get('/admin/paid/{invoice_id}/client/{client_id}',[AdminController::class, 'getClientByInvoices'])->name('getClientByInvoices');

		Route::post('/admin/paid',[AdminController::class, 'finishToPaidInvoice'])->name('finishToPaidInvoice');

		Route::get('/admin/allUnPaidInvoices',[AdminController::class, 'allUnPaidInvoices'])->name('allUnPaidInvoices');

		Route::get('/admin/allPaidInvoices',[AdminController::class, 'allPaidInvoices'])->name('allPaidInvoices');



		Route::get('/admin/status',[AdminController::class, 'adminStatus'])->name('adminStatus');

		Route::get('/admin/manage_products',[AdminController::class, 'manageProducts'])->name('manageProducts');

		Route::post('/admin/manage_products/add',[AdminController::class, 'storeProduct'])->name('adminAddStore');

		Route::get('/admin/manage_products/remove',[AdminController::class, 'adminRemove'])->name('adminRemove');

		Route::match(['get','put'],'/admin/manage_products/remove/removed',[AdminController::class, 'removeProduct'])->name('removeProduct');

		Route::get('/admin/products_types',[AdminController::class, 'productsType'])->name('productsType');

		Route::post('/admin/products_types/create',[AdminController::class, 'createType'])->name('createType');

		Route::match(['get','delete'],'/admin/products_types/delete/{id}',[AdminController::class, 'deleteType'])->name('deleteType');

		Route::get('/admin/print/{invoice_id}',[AdminController::class, 'print']);

		Route::get('/admin/stock/{id}',[AdminController::class, 'viewStock'])->name('viewStock');

		Route::match(['get','post'],'/admin/stock/type',[AdminController::class, 'viewTypeStock'])->name('viewTypeStock');

		Route::match(['get','put'],'/admin/stock/update',[AdminController::class, 'updateProduct'])->name('updateProduct');

		Route::get('/admin/clauses',[AdminController::class, 'adminClauses'])->name('adminClauses');

		Route::get('/admin/profile',[AdminController::class, 'adminProfile'])->name('adminProfile');


		Route::match(['get','put'],'/admin/profile/update',[AdminController::class, 'updateAdmin'])->name('updateAdmin');

		Route::match(['get','put'],'/admin/profile/change_password',[AdminController::class, 'changePassword'])->name('changePassword');

		Route::match(['get','post'],'/admin/profile/save_settings',[AdminController::class, 'saveSettings'])->name('saveSettings');


		Route::match(['get','put'],'/admin/customer/block/{id}/{status}',[ManageAdminController::class, 'blockCustomer'])->name('blockCustomer');

		Route::match(['get','put'],'/admin/administrator/block/{id}/{status}',[ManageAdminController::class, 'blockAdmin'])->name('blockAdmin');

		Route::get('/admin/customer/edit/{id}',[ManageAdminController::class, 'editCustomer'])->name('editCustomer');

		Route::get('/admin/administrator/edit/{id}',[ManageAdminController::class, 'editAdmin'])->name('editAdmin');

		Route::match(['get','put'],'/admin/customer/saveCustomer/{id}',[ManageAdminController::class, 'saveCustomer'])->name('saveCustomer');

		Route::match(['get','put'],'/admin/administrator/saveAdmin/{id}',[ManageAdminController::class, 'saveAdmin'])->name('saveAdmin');

<<<<<<< HEAD
=======
        Route::match(['get','post'],'/admin/customer/account/update/{id}',[ManageAdminController::class, 'updateAccount'])->name('updateAccount');

>>>>>>> 6e695ce05158f9bb1652866c9ca48068c7dbf590
		Route::get('/admin/map', function() {
		    return view('admin/maps');
		});

		Route::match(['get','put'],'/admin/customer/delete/{id}',[ManageAdminController::class, 'deleteCustomer'])->name('deleteCustomer');

		Route::match(['get','put'],'/admin/administrator/delete/{id}',[ManageAdminController::class, 'deleteAdmin'])->name('deleteAdmin');

		Route::get('/admin/finances',[AdminController::class, 'finance'])->name('seeFinances');

		Route::post('/admin/finances',[AdminController::class, 'financeYear'])->name('seeFinancesYear');

		Route::get('/admin/finances/details',[AdminController::class, 'financeDetails'])->name('financeDetails');

		Route::get('/admin/finances/details/customer/{id}',[AdminController::class, 'customerDetails'])->name('customerDetails');

		Route::post('/admin/finances/details/customer/{id}',[AdminController::class, 'customerDetailsYear'])->name('customerDetailsYear');

});


