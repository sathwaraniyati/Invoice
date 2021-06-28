<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ChartsController;


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


Route::get('/', [AdminController::class, 'login'])->name('login');
Route::post('adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');

Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('postRegister', [AdminController::class, 'postRegister'])->name('postRegister');

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
Route::post('/profile',[ProfileController::class, 'update'])->name('update');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('show', function () {
    return view('show');
});
Route::get('showprofile', function () {
    return view('showprofile');
});
Route::get('updateprofile', function () {
    return view('updateprofile');
});


Route::get('update', function () {
    return view('update');
});

Route::get('/updateprofiile/{id}',[AdminController::class,'updateprofile'])->name('updateAddd');
Route::post('/save-updated',[AdminController::class,'saveUpdated'])->name('saveUpdate');
Route::get('showprofile',[AdminController::class,'showprofile']);

Route::post('save-data',[HomeController::class,'add'])->name('saveData');
Route::get('show',[HomeController::class,'show']);
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('deleteAdd');
Route::get('/update/{id}',[HomeController::class,'update'])->name('updateAdd');

 Route::post('/save-updated-data',[HomeController::class,'saveUpdatedd'])->name('saveUpdatePostt');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//invoice
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('/addInvoice', [InvoiceController::class, 'addInvoice'])->name('addInvoice');
Route::post('postInvoice', [InvoiceController::class, 'postInvoice'])->name('postInvoice');
Route::get('invoice/delete/{id}', [InvoiceController::class, 'delete']);
Route::get('invoice/edit/{id}', [InvoiceController::class, 'edit']);
Route::post('updateInvoice', [InvoiceController::class, 'update'])->name('updateInvoice');
Route::get('invoice/mpdf/{id}', [InvoiceController::class, 'mpdf']);

//Pir charts route
 Route::get('charts', [ChartsController::class, 'index'])->name('charts');

//bar charts route
 Route::get('barcharts', [ChartsController::class, 'bar'])->name('barcharts');
