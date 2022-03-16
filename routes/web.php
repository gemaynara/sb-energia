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


Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/post-login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('post-login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/dashboardClient', [App\Http\Controllers\DashboardController::class, 'dashboardClient']);

    Route::group(['prefix' => 'distributors'], function () {
        Route::get('/', [\App\Http\Controllers\DistributorController::class, 'index'])->name('distributors.index');
        Route::get('/create', [\App\Http\Controllers\DistributorController::class, 'create'])->name('distributors.create');
        Route::post('/store', [\App\Http\Controllers\DistributorController::class, 'store'])->name('distributors.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\DistributorController::class, 'edit'])->name('distributors.edit');
        Route::put('/update/{id}', [\App\Http\Controllers\DistributorController::class, 'update'])->name('distributors.update');
        Route::put('/disable/{id}', [\App\Http\Controllers\DistributorController::class, 'destroy'])->name('distributors.disable');
        Route::put('/active/{id}', [\App\Http\Controllers\DistributorController::class, 'active'])->name('distributors.active');
    });

    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', [\App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
        Route::get('/create', [\App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
        Route::post('/store', [\App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
        Route::get('/edit/{id}', [\App\Http\Controllers\ClientController::class, 'edit'])->name('clients.edit');
        Route::put('/update/{client}/{user}', [\App\Http\Controllers\ClientController::class, 'update'])->name('clients.update');
        Route::put('/disable/{id}', [\App\Http\Controllers\ClientController::class, 'destroy'])->name('clients.disable');
        Route::put('/active/{id}', [\App\Http\Controllers\ClientController::class, 'active'])->name('clients.active');
    });

    Route::group(['prefix' => 'invoices'], function () {
        Route::get('/', [\App\Http\Controllers\InvoiceController::class, 'index'])->name('invoices.index');
        Route::get('/my-invoices', [\App\Http\Controllers\InvoiceController::class, 'myInvoices'])->name('invoices.my-invoices');
        Route::get('/client/{id}', [\App\Http\Controllers\InvoiceController::class, 'invoiceByClient'])->name('invoices.client');
        Route::get('/print/{id}', [\App\Http\Controllers\InvoiceController::class, 'printInvoice'])->name('invoices.print');
    });
});
