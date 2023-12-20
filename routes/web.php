<?php

use App\Http\Controllers\Controller;
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

Route::get('/tambahnegara', function () {
    return view('tambahnegara');
});

Route::get('/', [Controller::class, 'workSPK']);
Route::post('/tambah', [Controller::class, 'createnegara']);
Route::delete('/data/{id}', [Controller::class, 'hapus']);