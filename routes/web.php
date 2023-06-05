<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

use App\Http\Controllers\CentreController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patienthome', [App\Http\Controllers\PatientController::class, 'index'])->name('patienthome');
Route::get('/medecinhome', [App\Http\Controllers\MedecinController::class, 'index'])->name('medecinhome');
Route::get('/urgencehome', [App\Http\Controllers\UrgenceController::class, 'index'])->name('urgencehome');
Route::get('/addpatient', [App\Http\Controllers\PatientController::class, 'add']);
Route::post('/addpatientss', [App\Http\Controllers\PatientController::class, 'store'])->name('storepatient');
Route::post('/updatepatient', [App\Http\Controllers\PatientController::class, 'update'])->name('updatepatient');
Route::get('/deletepatient/{id}', [App\Http\Controllers\PatientController::class, 'delete'])->name('deletepatient');
Route::get('/editpatient/{id}', [App\Http\Controllers\PatientController::class, 'edit']);
Route::get('/typeurgencehome/{id}/{nom}', [App\Http\Controllers\TypeurgenceController::class, 'index'])->name('typeurgencehome');
Route::get('/detailsurgencehome/{id}/{nom}', [App\Http\Controllers\SousTypController::class, 'index'])->name('deatilsurgencehome');
Route::get('/detailspatient/{id}', [App\Http\Controllers\PatientController::class, 'detailspatient'])->name('detailspatient');
Route::resource('centreurgence', CentreurgenceController::class);
Route::get('/archive', [App\Http\Controllers\CentreController::class, 'archive'])->name('archive');









Route::get('/addmedecin', [App\Http\Controllers\MedecinController::class, 'add'])->name('addmedecin');
Route::post('/addmedecinss', [App\Http\Controllers\MedecinController::class, 'store'])->name('storemedecin');
Route::post('/updatemedecin', [App\Http\Controllers\MedecinController::class, 'update'])->name('updatemedecin');
Route::get('/deletemedecin/{id}', [App\Http\Controllers\MedecinController::class, 'delete'])->name('deletemedecin');
Route::get('/editmedecin/{id}', [App\Http\Controllers\MedecinController::class, 'edit']);



Route::get('/addurgence', [App\Http\Controllers\UrgenceController::class, 'index2'])->name('addurgence');
Route::post('/addurgence', [App\Http\Controllers\UrgenceController::class, 'store'])->name('addurgence');
Route::get('/deleteurgence/{id}', [App\Http\Controllers\UrgenceController::class, 'delete'])->name('deleteurgence');





Route::get('/addtype/{id}', [App\Http\Controllers\TypeurgenceController::class, 'addtype'])->name('addtype');
Route::post('/addtype', [App\Http\Controllers\TypeurgenceController::class, 'store'])->name('storetype');
Route::get('/deletetype/{id}', [App\Http\Controllers\TypeurgenceController::class, 'delete'])->name('seletetype');
Route::get('/edittype/{id}', [App\Http\Controllers\TypeurgenceController::class, 'edit'])->name('edittype');
Route::post('/updatetype', [App\Http\Controllers\TypeurgenceController::class, 'update'])->name('updatetype');






Route::get('/centre', [App\Http\Controllers\CentreController::class, 'index']);

Route::post('/updatecentre', [App\Http\Controllers\CentreController::class, 'update'])->name('updatecentre');
Route::get('/centre', [CentreController::class, 'index'])->name('centre.index');
Route::get('/centre/enCours', [CentreController::class, 'enCours'])->name('centre.enCours');
Route::get('/centre/termines', [CentreController::class, 'termines'])->name('centre.termines');
Route::get('/centre/enAttente', [CentreController::class, 'enAttente'])->name('centre.enAttente');
Route::get('/centre/recent', [CentreController::class, 'recent'])->name('centre.recent');