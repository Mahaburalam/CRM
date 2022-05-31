<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CallTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessDivisionController;
use Illuminate\Support\Facades\Auth;

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
    return view('/auth/login');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');

    /* Admin Product Section*/
    Route::get('/add-product', [ProductController::class, 'add_product'])->name('add_product.view');
    Route::post('/store-product', [ProductController::class, 'store_product'])->name('store_product.view');
    Route::get('/show-product', [ProductController::class, 'show_product'])->name('show_product.view');
    Route::get('/edit_product-details/{id}', [ProductController::class, 'edit_product'])->name('edit_product_details.view');
    Route::post('/update-product-details/{id}', [ProductController::class, 'update_product'])->name('update_product_details.view');
    Route::post('/delete-product-details', [ProductController::class, 'delete_product'])->name('delete_product.view');

    /* Admin Department Section*/
    Route::get('/add-department', [DepartmentController::class, 'add_department'])->name('add_department.view');
    Route::post('/store-department', [DepartmentController::class, 'store_department'])->name('store_department.view');
    Route::get('/show-department', [DepartmentController::class, 'show_department'])->name('show_department.view');
    Route::get('/edit_department-details/{id}', [DepartmentController::class, 'edit_department'])->name('edit_department_details.view');
    Route::post('/update-department-details/{id}', [DepartmentController::class, 'update_department'])->name('update_department_details.view');
    Route::post('/delete-department-details', [DepartmentController::class, 'delete_department'])->name('delete_department.view');


    /*Customer Section*/
    Route::get('/add-customer', [CustomerController::class, 'add_customer'])->name('add_customer.view');
    Route::post('/store-customer', [CustomerController::class, 'store_customer'])->name('store_customer.view');
    Route::get('/show-customer', [CustomerController::class, 'show_customer'])->name('show_customer.view');
    Route::get('/edit_customer-details/{id}', [CustomerController::class, 'edit_customer'])->name('edit_customer_details.view');
    Route::post('/update-customer-details/{id}', [CustomerController::class, 'update_customer'])->name('update_customer_details.view');
    Route::post('/delete-customer-details', [CustomerController::class, 'delete_customer'])->name('delete_customer.view');


    /*Call Type Section*/
    Route::get('/add-calltype', [CallTypeController::class, 'add_calltype'])->name('add_calltype.view');
    Route::post('/store-calltype', [CallTypeController::class, 'store_calltype'])->name('store_calltype.view');
    Route::get('/show-calltype', [CallTypeController::class, 'show_calltype'])->name('show_calltype.view');
    Route::get('/edit_calltype-details/{id}', [CallTypeController::class, 'edit_calltype'])->name('edit_calltype_details.view');
    Route::post('/update-calltype-details/{id}', [CallTypeController::class, 'update_calltype'])->name('update_calltype_details.view');
    Route::post('/delete-calltype-details', [CallTypeController::class, 'delete_calltype'])->name('delete_calltype.view');

    /*Call Type Section*/
    Route::get('/add-business-division', [BusinessDivisionController::class, 'add_business_division'])->name('add_business_division.view');
    Route::post('/store-business-division', [BusinessDivisionController::class, 'store_business_division'])->name('store_business_division.view');
    Route::get('/show-business-division', [BusinessDivisionController::class, 'show_business_division'])->name('show_business_division.view');
    Route::get('/edit-business-division-details/{id}', [BusinessDivisionController::class, 'edit_business_division'])->name('edit_business_division_details.view');
    Route::post('/update-business-division-details/{id}', [BusinessDivisionController::class, 'update_business_division'])->name('update_business_division_details.view');
    Route::post('/delete-business-division-details', [BusinessDivisionController::class, 'delete_business_division'])->name('delete_business_division.view');


    /*User Section*/
    Route::get('/add-user', [UserController::class, 'add_user'])->name('add_user.view');
    Route::post('/store-user', [UserController::class, 'store_user'])->name('store_user.view');
    Route::get('/show-user', [UserController::class, 'show_user'])->name('show_user.view');
    Route::get('/edit_user/{id}', [UserController::class, 'edit_user'])->name('edit_user_details.view');
    Route::post('/update-user/{id}', [UserController::class, 'update_user'])->name('update_user_details.view');
    Route::post('/delete-user', [UserController::class, 'delete_user'])->name('delete_user.view');


    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture', [AdminController::class, 'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('adminChangePassword');
});

Route::group(['prefix' => 'agent', 'middleware' => ['isAgent', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AgentController::class, 'index'])->name('agent.dashboard');
    Route::post('user-account-info', [AgentController::class, 'user_account_info_test'])->name('user_account.info');
});
