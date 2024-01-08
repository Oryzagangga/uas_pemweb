<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/login');

Route::get('/login', [LoginController::class, 'index'])
    ->middleware(['guest'])
    ->name('login.index');

Route::get('/register', [RegisterController::class, 'index'])
    ->middleware(['guest'])
    ->name('register.index');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware(['guest'])
    ->name('login.store');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware(['guest'])
    ->name('register.store');

Route::get('/forgotpassword', [ForgotPasswordController::class, 'index'])
    ->middleware(['guest'])
    ->name('forgotPassword.index');

Route::post('/forgotpassword', [ForgotPasswordController::class, 'store'])
    ->middleware(['guest'])
    ->name('forgotPassword.store');

Route::get('/changepassword', [ChangePasswordController::class, 'index'])
    ->middleware(['guest'])
    ->name('changePassword.index');

Route::post('/changepassword', [ChangePasswordController::class, 'store'])
    ->middleware(['guest'])
    ->name('changePassword.store');

Route::get('/cashier', [CashierController::class, 'index'])
    ->middleware(['auth'])
    ->name('cashier.index');

Route::get('/invoices', [InvoiceController::class, 'index'])
    ->middleware(['auth'])
    ->name('invoice.index');

Route::get('/invoices/{invoice}', [InvoiceController::class, 'show'])
    ->middleware(['auth'])
    ->name('invoice.show');

Route::get('/products', [ProductController::class, 'index'])
    ->middleware(['auth'])
    ->name('product.index');

Route::post('/products', [ProductController::class, 'store'])
    ->middleware(['auth'])
    ->name('product.store');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
    ->middleware(['auth'])
    ->name('product.edit');

Route::post('/products/{product}', [ProductController::class, 'update'])
    ->middleware(['auth'])
    ->name('product.update');

Route::get('/products/create', [ProductController::class, 'create'])
    ->middleware(['auth'])
    ->name('product.create');

