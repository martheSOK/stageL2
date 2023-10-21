<?php
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepController;
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
    return view('Acceuil');
});

//Route::get('user/register', [VueController::class, 'index1'])->name('register');
//Route::get('user/login', [VueController::class, 'index2'])->name('login');

/*Routes Personnel*/
Route::get('personnel/list',[PersonnelController::class, 'index'])->name('personnel.index');
Route::get('personnel/formulaire/creation',[PersonnelController::class, 'create'])->name('personnel.create');
Route::get('personnel/formulaire/edition/{personnel}',[PersonnelController::class, 'edit'])->name('personnel.edit');
Route::get('personnel/affichage',[PersonnelController::class, 'show'])->name('personnel.show');
Route::post('personnel/enregistrement',[PersonnelController::class, 'store'])->name('personnel.store');
Route::post('personnel/mis_a_jour/{personnel}', [PersonnelController::class, 'update'])->name('personnel.update');
Route::delete('personnel/{personnel}', [PersonnelController::class, 'destroy'])->name('personnel.delete');



/*Routes Personnel*/
Route::get('depot/list',[DepotController::class, 'index'])->name('depot.index');
Route::get('depot/formulaire/creation',[DepotController::class, 'create'])->name('depot.create');
Route::get('depot/formulaire/edition/{depot}',[DepotController::class, 'edit'])->name('depot.edit');
Route::get('depot/affichage',[DepotController::class, 'show'])->name('depot.show');
Route::post('depot/enregistrement',[DepotController::class, 'store'])->name('depot.store');
Route::post('depot/mis_a_jour/{depot}', [DepotController::class, 'update'])->name('depot.update');
Route::delete('depot/{depot}', [DepotController::class, 'destroy'])->name('depot.delete');

/*fournisseur*/

Route::get('fournisseur/list',[FournisseurController::class, 'index'])->name('fournisseur.index');
Route::get('fournisseur/formulaire/creation',[FournisseurController::class, 'create'])->name('fournisseur.create');
Route::get('fournisseur/formulaire/edition/{fournisseur}',[FournisseurController::class, 'edit'])->name('fournisseur.edit');
Route::post('fournisseur/enregistrement',[FournisseurController::class, 'store'])->name('fournisseur.store');
Route::get('fournisseur/{fournisseur}', [FournisseurController::class, 'show'])->name('fournisseur.show');
Route::post('fournisseur/mis_a_jour/{fournisseur}', [FournisseurController::class, 'update'])->name('fournisseur.update');
Route::delete('fournisseur/{fournisseur}', [FournisseurController::class, 'destroy'])->name('fournisseur.delete');

/*type emballage*/
Route::get('type_emballage/list',[TypeController::class, 'index'])->name('type_emballage.index');
Route::get('type_emballage/formulaire/creation',[TypeController::class, 'create'])->name('type_emballage.create');
Route::get('type_emballage/formulaire/edition/{emballage}',[TypeController::class, 'edit'])->name('type_emballage.edit');
Route::post('type_emballage/enregistrement',[TypeController::class, 'store'])->name('type_emballage.store');
Route::get('type_emballage/{emballage}', [TypeController::class, 'show'])->name('type_emballage.show');
Route::post('type_emballage/mis_a_jour/{emballage}', [TypeController::class, 'update'])->name('type_emballage.update');
Route::delete('type_emballage/{emballage}', [TypeController::class, 'destroy'])->name('type_emballage.delete');


/*client*/
Route::get('client/list',[ClientController::class, 'index'])->name('client.index');
Route::get('client/formulaire/creation',[ClientController::class, 'create'])->name('client.create');
Route::get('client/formulaire/edition/{client}',[ClientController::class, 'edit'])->name('client.edit');
Route::post('client/enregistrement',[ClientController::class, 'store'])->name('client.store');
Route::get('client/{client}', [ClientController::class, 'show'])->name('client.show');
Route::post('client/mis_a_jour/{client}', [ClientController::class, 'update'])->name('client.update');
Route::delete('client/{client}', [ClientController::class, 'destroy'])->name('client.delete');

/*depot_emballage_fournisseur*/
Route::get('dep/list',[DepController::class, 'index'])->name('dep.index');
Route::get('dep/formulaire/creation',[DepController::class, 'create'])->name('dep.create');
Route::get('dep/formulaire/edition/{dep}',[DepController::class, 'edit'])->name('dep.edit');
Route::post('dep/enregistrement',[DepController::class, 'store'])->name('dep.store');
Route::get('dep/{dep}', [DepController::class, 'show'])->name('client.show');
Route::post('dep/mis_a_jour/{dep}', [DepController::class, 'update'])->name('dep.update');
Route::delete('dep/{dep}', [DepController::class, 'destroy'])->name('dep.delete');
