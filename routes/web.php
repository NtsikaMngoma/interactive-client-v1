<?php

use App\Http\Controllers;
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
Route::get('/', function (){
    return View('welcome');
})->name('home.index');

/**
 * -- Persons Routing
 *
 */
$personController = Controllers\PersonsController::class;

Route::get('/persons', [$personController, 'index'])->name('persons.find');
Route::get('/persons/create', [$personController, 'createPerson'])->name('persons.create');

/**
 *
 *  Create
 */
Route::post('/person-create', [$personController, 'requestPerson'])->name('person.request');


/**
 * -- Accounts Routing
 *
 */
$accountsController = Controllers\AccountsController::class;

Route::get('/accounts', [$accountsController, 'index'])->name('accounts.find');
Route::get('/accounts/create', [$accountsController, 'createAccount'])->name('account.create');

/**
 *
 *  Create
 */
Route::post('/account-create', [$accountsController, 'storeAccount'])->name('account.store');

/**
 * -- Transactions Controller
 *
 */
$transactionsController = Controllers\TransactionsController::class;

Route::get('/transactions', [$transactionsController, 'index'])->name('transactions.find');
Route::get('/transactions/create', [$transactionsController, 'createTransaction'])->name('transact');

