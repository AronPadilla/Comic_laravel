<?php
use App\Http\Controllers\practicehome;
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
    // return view('welcome');
    return "bienvenido ala pagina principalxdxdxd"; 
});

Route::get('/hola', [practicehome::class, 'index']);


Route::get('/hola/create', [practicehome::class, 'create']);

// Route::get('/hola/{jaja}',[]);

