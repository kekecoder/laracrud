<?php

use App\Http\Controllers\LaraCrudController;
use App\Models\LaraCrud;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LaraCrudController::class, 'index']);
Route::get('/create', [LaraCrudController::class, 'create']);
Route::post('/create', [LaraCrudController::class, 'store']);