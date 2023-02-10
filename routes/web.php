<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ServiceController;
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

/* GESTION DE LA PAGE ACCUEIL */

// Route de la page d'accueil en GET
Route::get('/', [HomepageController::class, 'index']);

/* GESTION DES PRODUITS */

// Route de la page de vue détaillée d'un produit
Route::get('/compte/{id}', [AccountController::class, 'show']);

// Route de la page de création d'un produit
Route::get('/ajout/compte', [AccountController::class, 'create'])->middleware('auth');

// Route d'enregistrement d'un produit
Route::post('/enregistrer-compte', [AccountController::class, 'save'])->middleware('auth');

// Route permettant de supprimer un produit
Route::delete('/supprimer-compte/{id}', [AccountController::class, 'delete']);

// Route permettant d'afficher le formulaire d'édition d'un produit
Route::get('/modifier-compte/{id}', [AccountController::class, 'edit']);

// Route permettant d'enregistrer les modifications d'un produit
Route::put('/edition-compte/{id}', [AccountController::class, 'saveEdit']);

/* GESTION DE LA PAGE SERVICES */

// Route de la page des services
Route::get('/services', [ServiceController::class, 'index'])->middleware('auth');

/* GESTION DE L'AUTHENTIFICATION */

// Route de la page de connexion
Route::get('/enregistrer', [AuthController::class, 'register']);

// Route pour s'enregistrer
Route::post('/enregistrer', [AuthController::class, 'create'])->name('register');

// Route de la page de connexion
Route::get('/connexion', [AuthController::class, 'login']);

// Route pour s'authentifier
Route::post('/connexion', [AuthController::class, 'authenticate'])->name('connexion');

// Route pour se déconnecter
Route::post('/deconnexion', [AuthController::class, 'logout']);


