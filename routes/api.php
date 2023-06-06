<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CurrencyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('cost/convert', [CostController::class,'convertCurrency'])->name('convert');
Route::get('cost/calc/{id}', [CostController::class,'calcProjectCost'])->name('calc_total');
Route::post('cost/calc-w-currency', [CostController::class,'calcProjectCostWithCurrency']);

Route::resource('project', ProjectController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('cost', CostController::class);
