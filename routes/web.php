<?php

use App\Http\Controllers\ProjectController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[ProjectController::class, 'index'])->name('project.index');
Route::get('/detail/{id_project}',[ProjectController::class, 'show'])->name('project.show');


Route::get('/detail', function () {
    return view('detail');
});
