<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// list all contacts
Route::get('/contacts/create', [contactController::class, 'create'])->name('form.get');
Route::post('/contacts', [ContactController::class, 'allContact'])->name('form.post');
Route::get('/contacts', [ContactController::class, 'contactsIndex'])->name('allContacts');
// Show the from to create a new contact
// Store a new contact
//Route::get('/contacts', []);
// Show a specific contact
Route::get('/contacts/{id}', [contactController::class, 'showContact']);
// Show the form to edit a contact
Route::get('/contacts/{id}/edit', []);
// Update a contact
Route::get('/contacts/{id}', []);
// Delete a contact
Route::get('/contacts/{id}/delete', []);
