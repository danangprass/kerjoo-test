<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(AbsenceController::class)->prefix('/annual-leave')->group(function () {
    Route::get('', 'index')->name('annual-leave.list');
    Route::get('{id}', 'show')->name('annual-leave.detail');
    Route::post('', 'store')->name('annual-leave.create');
    Route::patch('{id}', 'update')->name('annual-leave.update');
    Route::delete('{id}', 'destroy')->name('annual-leave.delete');
});
