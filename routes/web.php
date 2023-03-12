<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\UtilityController;

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

Route::view('welcome', 'welcome')->name('welcome');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::resource('customer', CustomerController::class);
    Route::resource('item', ItemController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('salesman', SalesmanController::class);
    Route::resource('bill', BillController::class);

    // Utility Controller
    Route::post('select/customer', [UtilityController::class, 'selectCustomer'])->name('utility.select.customer');
    Route::post('select/item', [UtilityController::class, 'selectItem'])->name('utility.select.item');
});
