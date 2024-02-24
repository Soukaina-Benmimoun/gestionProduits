<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[ProduitController::class,'index'])->name('racine');
Route::get('/produit/ajouter',[ProduitController::class,'affiche_form'])->name('ajouter_produit');
Route::post('/produit/ajouter',[ProduitController::class,'storeProduit'])->name('ajouter_produit');
Route::get('/categorie/ajouter',[ProduitController::class,'ajouterCategorie'])->name('ajouter_categorie');
Route::post('/categorie/ajouter',[ProduitController::class,'storeCategorie'])->name('ajouter_categorie');
Route::get('/produit/liste',[ProduitController::class,'show_all_produit'])->name('liste_produit');
Route::get('/produit/categorie/liste/{id}',[ProduitController::class,'afficher_produit_categorie'])->name('liste_pr_cate');
Route::get('/produit/details{id}',[ProduitController::class,'details_produit'])->name('details_produit');
Route::get('/produit/modifier/{id}',[ProduitController::class,'modifier_produit'])->name('modifier_produit');
Route::put('/produit/modifier/{id}',[ProduitController::class,'update_produit'])->name('modifier_produit');
Route::delete('/produit/supprimer/{id}',[ProduitController::class,'supprimer_produit'])->name('supprimer_produit');
