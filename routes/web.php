<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/home', [TodoController::class, 'index'])->middleware('auth');
    Route::post('/add', [TodoController::class, 'add']);
    Route::post('/update', [TodoController::class, 'update']);
    Route::post('/delete', [TodoController::class, 'delete']);
    Route::get('/find', [TodoController::class, 'find']);
    Route::get('/search', [TodoController::class, 'search']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [TodoController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
