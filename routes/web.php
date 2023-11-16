<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
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

Route::get('/ajoutEleve', [EleveController::class,"create"]);

Route::post('/ajouterEleve', [EleveController::class,"store"]);

Route::get('/listeEleve', [EleveController::class,"index"]);

Route::get('/voirDetails/{eleve}', [EleveController::class,"show"]);

Route::get('/modifEleve/{eleve}', [EleveController::class,"edit"]);

Route::post('/modifierEleve/{eleve}', [EleveController::class,"update"]);

Route::get('/supprimerEleve/{eleve}', [EleveController::class,"destroy"]);

// DEBUT ROUTE POUR LES NOTES

Route::get('/ajoutNote/{id}', [NoteController::class,"create"]);

Route::post('/ajouterNote/{id}', [NoteController::class,"store"]);