<?php

use App\Models\Tournament;
use Illuminate\Support\Facades\Route;

// api sederhana, cuma buat nampilin data turnamen
Route::get('/tournaments', function () {
    return response()->json(Tournament::all());
});

Route::get('/tournaments/{id}', function ($id) {
    return response()->json(Tournament::findOrFail($id));
});
