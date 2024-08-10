<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts/create', [contactController::class, 'create'])->name('form.get');
Route::post('/contacts', [ContactController::class, 'allContact'])->name('form.post');
Route::get('/contacts', [ContactController::class, 'contactsIndex'])->name('allContacts');
Route::get('/contacts/{id}', [contactController::class, 'showContact']);
Route::get('/contacts/{id}/edit', [contactController::class, 'edit'])->name('form.edit');
Route::post('contacts/{id}', [contactController::class, 'update'])->name('form.update');
Route::get('/contacts/{id}/delete', [contactController::class, 'delateContacts'])->name('form.delete');
Route::get('/contacts/{id}/search', [contactController::class, 'showContact'])->name('showContact');
