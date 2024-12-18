<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

//Route de la page Accueil
Route::get('/', function () {
    return view('accueil');
});

//Route de la page Clients
Route::get('clients', [\App\Http\Controllers\ClientsController::class, 'clients'])->name('clients');
Route::get('clients/creer', [\App\Http\Controllers\ClientsController::class, 'creer'])->name('client.creer');
Route::post('clients/enregistrer', [\App\Http\Controllers\ClientsController::class, 'enregistrer'])->name('client.enregistrer');
Route::get('clients/{id}', [\App\Http\Controllers\ClientsController::class, 'details'])->name('client.details');

//Route de la page Contacts
Route::get('contacts', [\App\Http\Controllers\ContactsController::class, 'contacts']);

//Route de la page Projets
Route::get('projets', [\App\Http\Controllers\ProjetsController::class, 'projets']);

//Route de la page Table
Route::get('tables', [\App\Http\Controllers\TablesController::class, 'tables'])->name('tables');
