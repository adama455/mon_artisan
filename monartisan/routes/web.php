<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeclarationsController;

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
    return view('index');
})->name('acceuil');
Route::get('artisan/faq', function () {
    return view('faq');
})->name('faq');
Route::get('artisan/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/artisan-liste-declaration', [DeclarationsController::class, 'listeContact'])->name('liste.declaration');
Route::get('/artisan-sinistre/create', [DeclarationsController::class, 'create'])->name('sinistre.create');


Route::post('/artisan-sinistre/ajouter', [DeclarationsController::class, 'store'])->name('sinistre.ajouter');
Route::delete('/artisan-sinistre/{id}', [DeclarationsController::class, 'delete'])->name('sinistre.suprimer');

Route::view('/artisan-sinistre/edit/{id}', [DeclarationsController::class, 'edit'])->name('sinistre.edit');
Route::put('/artisan-sinistre/{id}', [DeclarationsController::class, 'update'])->name('sinistre.modifier');


Route::get('/artisan-liste-contact', [ContactController::class, 'listeContact'])->name('liste.contact');
Route::get('/artisan-contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::delete('/artisan-contact/{id}', [ContactController::class, 'delete'])->name('contact.suprimer');
Route::post('/artisan-contact/ajouter', [ContactController::class, 'store'])->name('contact.ajouter');
Route::view('/artisan-contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('/artisan-contact/{id}', [ContactController::class, 'update'])->name('contact.modifier');

