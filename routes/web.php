<?php

use Illuminate\Support\Facades\Route;

// Import controllers
use App\Http\Controllers\NoteController;
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

Route::get('/welcome', function(){
    return view('welcome');
});


Route::get('/', [NoteController::class, 'index']);
Route::get('/note/add', [NoteController::class, 'addNote']);
Route::get('/note/edit', [NoteController::class, 'editNote']);
Route::post('/note/create', [NoteController::class, 'createNote']);



