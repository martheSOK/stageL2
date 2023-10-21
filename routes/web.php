<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\MouvementController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ConsignationController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Models\Fournisseur;
use App\Models\TypeEmballage;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('personnels', PersonnelController::class);
Route::resource('clients', ClientController::class);
Route::resource('achats', AchatController::class);
Route::resource('fournisseurs', FournisseurController::class);
Route::resource('depots', DepotController::class);
Route::resource('emballages', TypeController::class);
Route::resource('mouvements', MouvementController::class);
Route::resource('stocks',StockController::class);
Route::resource('ventes',VenteController::class);
Route::resource('consignations',ConsignationController::class);

// routes/web.php

Route::get('/bilan', 'BilanController@generateBilan')->name('bilan');

/*Route::middleware(['guest'])->group(function () {
    Route::get('/login-then-register', [App\Http\Controllers\Auth\LoginRegisterController::class, 'showRegisterAfterLogin'])
        ->name('login_then_register');
});*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';