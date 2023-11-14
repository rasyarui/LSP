<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\BukuController;
// use App\Models\Buku;

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

Route::get('/home', [BukuController::class, 'index'])->middleware('auth');
Route::get('/tambah', [BukuController::class, 'tambah'])->name('buku.tambah')->middleware('admin');


Route::get('/edit{buku}', [BukuController::class, 'edit'])->name('buku.edit')->middleware('auth');
Route::get('/edit2/{buku2}', [BukuController::class, 'edit2'])->name('buku.edit2')->middleware('auth');
Route::get('/edit3/{buku3}', [BukuController::class, 'edit3'])->name('buku.edit3')->middleware('auth');

Route::post('/tambah', [BukuController::class, 'create'])->name('buku.create');
Route::post('/tambah1', [BukuController::class, 'create2'])->name('buku.create2');
Route::post('/tambah2', [BukuController::class, 'create3'])->name('buku.create3');

Route::get('/{buku}', [BukuController::class, 'show'])->name('buku.show')->middleware('auth');
Route::get('/deskripsi2/{buku2}', [BukuController::class, 'show2'])->name('buku.show2')->middleware('auth');
Route::get('/deskripsi3/{buku3}', [BukuController::class, 'show3'])->name('buku.show3')->middleware('auth');

Route::put('/{buku}', [BukuController::class, 'update'])->name('buku.update');
Route::put('/update2/{buku2}', [BukuController::class, 'update2'])->name('buku.update2');
Route::put('/update3/{buku3}', [BukuController::class, 'update3'])->name('buku.update3');

Route::delete('/{buku}', [BukuController::class, 'delete'])->name('buku.delete');
Route::delete('/delete2/{buku2}', [BukuController::class, 'delete2'])->name('buku.delete2');
Route::delete('/delete3/{buku3}', [BukuController::class, 'delete3'])->name('buku.delete3');



Route::get('/', [LogController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LogController::class, 'authenticate']);
Route::post('/logout', [LogController::class, 'logout']);



Route::get('/register', [RegisController::class, 'index'])->middleware('guset');
Route::post('/register', [RegisController::class, 'store']);





