<?php

use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ConncetionController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth API
Route::get('/request_token', [ConncetionController::class, 'index']);

// CHECKLIST API
Route::get('/all_checklist', [ChecklistController::class, 'get_all']);
Route::get('/create_checklist', [ChecklistController::class, 'create_checklist']);
Route::get('/delete_checklist/{id}', [ChecklistController::class, 'delete_checklist']);

// CHECKLIST ITEM API
Route::get('/all_item/{id}', [ItemController::class, 'get_all']);
Route::get('/create_item/{id}', [ItemController::class, 'create_item']);
Route::get('/get_item/{id_item}/item/{id}', [ItemController::class, 'get_item']);
Route::get('/update_status/{id_item}/item/{id}', [ItemController::class, 'update_status']);
Route::get('/delete_item/{id_item}/item/{id}', [ItemController::class, 'delete_item']);
Route::get('/rename_item/{id_item}/item/{id}', [ItemController::class, 'rename_item']);
