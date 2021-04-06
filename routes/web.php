<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BooksController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('api/books', BooksController::class)->only([
    'index','store'
]);
Route::get('/api/books/{id}', [BooksController::class, 'show']);
Route::post('/api/books/{id}', [BooksController::class, 'update']);
Route::delete('/api/books/{id}', [BooksController::class, 'delete']);
Route::delete('/api/books/', [BooksController::class, 'deleteall']);
Route::get('/_api/get-tests', function () {
        return response()->file(public_path('test.json'));
});
