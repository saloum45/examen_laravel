<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\lignePromoteur;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\promoteurController;
use App\Http\Controllers\regionController;
use App\Http\Controllers\terrainController;
use App\Http\Controllers\zoneController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AuthenticatedSessionController::class, 'create'])->name('auth.login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// region

Route::get('region.index',[regionController::class, 'index'])->name('region.index');
Route::get('region.add', function(){return view('region.add');})->name('region.add');
Route::post('region.store',[regionController::class, 'store'])->name("region.store");
Route::get('region.edit/{id}',[regionController::class, 'edit'])->name('region.edit');
Route::get('region.show/{id}',[regionController::class, 'show'])->name('region.show');
Route::post('region.update/{id}', [regionController::class, 'update'])->name('region.update');
Route::get('region.delete/{id}', [regionController::class, 'destroy'])->name('region.delete');

// zone

Route::get('zone.index',[zoneController::class, 'index'])->name('zone.index');
Route::get('zone.add',[zoneController::class, 'create'])->name('zone.add');
Route::post('zone.store',[zoneController::class, 'store'])->name("zone.store");
Route::get('zone.edit/{id}',[zoneController::class, 'edit'])->name('zone.edit');
Route::get('zone.show/{id}',[zoneController::class, 'show'])->name('zone.show');
Route::post('zone.update/{id}', [zoneController::class, 'update'])->name('zone.update');
Route::get('zone.delete/{id}', [zoneController::class, 'destroy'])->name('zone.delete');

// terrain

Route::get('terrain.index',[terrainController::class, 'index'])->name('terrain.index');
Route::get('terrain.add', [terrainController::class, 'create'])->name('terrain.add');
Route::post('terrain.store',[terrainController::class, 'store'])->name("terrain.store");
Route::get('terrain.edit/{id}',[terrainController::class, 'edit'])->name('terrain.edit');
Route::get('terrain.show/{id}',[terrainController::class, 'show'])->name('terrain.show');
Route::post('terrain.update/{id}', [terrainController::class, 'update'])->name('terrain.update');
Route::get('terrain.delete/{id}', [terrainController::class, 'destroy'])->name('terrain.delete');

//  prometteur

Route::get('promoteur.index',[promoteurController::class, 'index'])->name('promoteur.index');
Route::get('promoteur.add', function(){return view('promoteur.add');})->name('promoteur.add');
Route::post('promoteur.store',[promoteurController::class, 'store'])->name("promoteur.store");
Route::get('promoteur.edit/{id}',[promoteurController::class, 'edit'])->name('promoteur.edit');
Route::get('promoteur.show/{id}',[promoteurController::class, 'show'])->name('promoteur.show');
Route::post('promoteur.update/{id}', [promoteurController::class, 'update'])->name('promoteur.update');
Route::get('promoteur.delete/{id}', [promoteurController::class, 'destroy'])->name('promoteur.delete');

// ligne prometteur
Route::get('lignePromoteur.index',[lignePromoteur::class, 'index'])->name('lignePromoteur.index');
Route::get('lignePromoteur.add',[lignePromoteur::class, 'create'])->name('lignePromoteur.add');
Route::post('lignePromoteur.store',[lignePromoteur::class, 'store'])->name("lignePromoteur.store");
Route::get('lignePromoteur.edit/{id}',[lignePromoteur::class, 'edit'])->name('lignePromoteur.edit');
Route::get('lignePromoteur.show/{id}',[lignePromoteur::class, 'show'])->name('lignePromoteur.show');
Route::post('lignePromoteur.update/{id}', [lignePromoteur::class, 'update'])->name('lignePromoteur.update');
Route::get('lignePromoteur.delete/{id}', [lignePromoteur::class, 'destroy'])->name('lignePromoteur.delete');
