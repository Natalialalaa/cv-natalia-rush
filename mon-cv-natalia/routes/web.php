<?php

use App\Models\Activite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MonBioController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormationController;

/*use App\Http\Controllers\ClubController;*/
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/competence/ajouter', [CompetenceController::class, 'create'])->name('competence.create');
Route::post('/competence/ajouter', [CompetenceController::class, 'store']);
Route::get('/competence/modifier/{competence}', [CompetenceController::class, 'edit'])->name('competence.edit');
Route::patch('/competence/modifier/{competence}', [CompetenceController::class, 'update']);
Route::get('/competence/delete/{competence}', [CompetenceController::class, 'delete'])->name('competence.delete');
Route::delete('/competence/delete/{competence}', [CompetenceController::class, 'destroy']);

Route::get('/experience/ajouter', [ExperienceController::class, 'create'])->name('experience.create');
Route::post('/experience/ajouter', [ExperienceController::class, 'store']);
Route::get('/experience/modifier/{experience}', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::patch('/experience/modifier/{experience}', [ExperienceController::class, 'update']);
Route::get('/experience/delete/{experience}', [ExperienceController::class, 'delete'])->name('experience.delete');
Route::delete('/experience/delete/{experience}', [ExperienceController::class, 'destroy']);

Route::get('/formation/ajouter', [FormationController::class, 'create'])->name('formation.create');
Route::post('/formation/ajouter', [FormationController::class, 'store']);
Route::get('/formation/modifier/{formation}', [FormationController::class, 'edit'])->name('formation.edit');
Route::patch('/formation/modifier/{formation}', [FormationController::class, 'update']);
Route::get('/formation/delete/{formation}', [FormationController::class, 'delete'])->name('formation.delete');
Route::delete('/formation/delete/{formation}', [FormationController::class, 'destroy']);

Route::get('/monbio/modifier/{monBio}', [MonBioController::class, 'edit'])->name('monbio.edit');
Route::patch('/monbio/modifier/{monBio}', [MonBioController::class, 'update']);

Route::get('/biographie', [MonBioController::class, 'index'])->name('mon_bio');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
