<?php

use App\Http\Controllers\celluleController;
use App\Http\Controllers\utilisateurController;
use App\Http\Controllers\typeuserController;
use App\Http\Controllers\demandecongeController;


use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get(
    '/utilisateurs',
    [
        utilisateurController::class, 'index'
    ]
);
Route::get(
    '/utilisateurs/{id}',
    [
        utilisateurController::class, 'show'
    ]
);
Route::post(
    '/addutilisateurs',
    [
        utilisateurController::class, 'store'
    ]
);
Route::put(
    '/utilisateurs/{id}',
    [
        utilisateurController::class, 'update'
    ]
);
Route::delete(
    '/utilisateurs/{id}',
    [
        utilisateurController::class, 'destroy'
    ]
);
Route::get(
    '/typeusers',
    [
        typeuserController::class, 'index'
    ]
);
Route::get(
    '/typeusers/{id}',
    [
        typeuserController::class, 'show'
    ]
);
Route::post(
    '/addtypeusers',
    [
        typeuserController::class, 'store'
    ]
);
Route::put(
    '/typeusers/{id}',
    [
        typeuserController::class, 'update'
    ]
);
Route::delete(
    '/typeusers/{id}',
    [
        typeuserController::class, 'destroy'
    ]
);
Route::get(
    '/cellules',
    [
        celluleController::class, 'index'
    ]
);
Route::get(
    '/cellules/{id}',
    [
        celluleController::class, 'show'
    ]
);
Route::post(
    '/addcellules',
    [
        celluleController::class, 'store'
    ]
);
Route::put(
    '/cellules/{id}',
    [
        celluleController::class, 'update'
    ]
);
Route::delete(
    '/cellules/{id}',
    [
        celluleController::class, 'destroy'
    ]
);



Route::get(
    '/demandeconges',
    [
        demandecongeController::class, 'index'
    ]
);
Route::get(
    '/demandeconges/{id}',
    [
        demandecongeController::class, 'show'
    ]
);
Route::post(
    '/adddemandeconges',
    [
        demandecongeController::class, 'store'
    ]
);
Route::put(
    '/demandeconges/{id}',
    [
        demandecongeController::class, 'update'
    ]
);
Route::delete(
    '/demandeconges/{id}',
    [
        demandecongeController::class, 'destroy'
    ]
);
Route::get(
    '/utlisateur/login/{email}',
    [
        utilisateurController::class, 'login'
    ]
);
