<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'home'])->name('home');
Route::get('/info', [ItemController::class, 'info'])->name('info');
Route::get('/items', [ItemController::class, 'items'])->name('items');
Route::get('/item/{id}', [ItemController::class, 'item'])->name('item');
Route::get('/search', [ItemController::class, 'search'])->name('search');
