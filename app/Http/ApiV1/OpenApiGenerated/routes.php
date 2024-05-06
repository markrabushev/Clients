<?php

/**
 * NOTE: This file is auto generated by OpenAPI Generator.
 * Do NOT edit it manually. Run `php artisan openapi:generate-server`.
 */

use App\Http\ApiV1\Modules\Clients\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::post('clients/register', [ClientController::class, 'register']);
Route::post('clients/create', [ClientController::class, 'create']);
Route::post('clients/login', [ClientController::class, 'login']);
Route::get('clients/{id}', [ClientController::class, 'get']);
Route::get('clients', [ClientController::class, 'get_clients']);
Route::put('clients/replace/{id}', [ClientController::class, 'replace']);
Route::delete('clients/delete/{id}', [ClientController::class, 'delete']);
