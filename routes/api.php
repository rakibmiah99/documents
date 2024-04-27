<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('subjects', [Controllers\SubjectController::class, 'index']);
Route::get('subject/{slug}', [Controllers\SubjectController::class, 'subjectDetails']);
