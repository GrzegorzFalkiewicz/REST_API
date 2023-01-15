<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('falkiewicz/305359/people',[PeopleController::class, 'index']);
Route::post('falkiewicz/305359/people',[PeopleController::class, 'create']);
Route::get('falkiewicz/305359/people/{people}',[PeopleController::class, 'read']);
Route::put('falkiewicz/305359/people/{people}',[PeopleController::class, 'update']);
Route::delete('falkiewicz/305359/people/{people}',[PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
