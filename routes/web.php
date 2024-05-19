<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [CompanyController::class, 'welcome'])->name('welcome');
Route::get('/welcome', [CompanyController::class, 'welcome'])->name('welcome');

Route::get('/create', [CompanyController::class, 'create']);
Route::post('/create1', [CompanyController::class, 'create1']);
Route::get('/edit/{id}', [CompanyController::class, 'edit']);
Route::patch('/edit1/{id}', [CompanyController::class, 'edit1']);
Route::delete('/delete/{id}', [CompanyController::class, 'delete']);
