<?php

use Illuminate\Support\Facades\Route;

Route::get('/fronted/index', function () {
    return view('welcome');
});
// list all contacts
Route::get('/contacts', []);
// Show the from to create a new contact
Route::get('/contacts/create', []);
// Store a new contact
Route::get('/contacts', []);
// Show a specific contact
Route::get('/contacts/{id}', []);
// Show the form to edit a contact
Route::get('/contacts/{id}/edit', []);
// Update a contact
Route::get('/contacts/{id}', []);
// Delete a contact
Route::get('/contacts/{id}/delete', []);
