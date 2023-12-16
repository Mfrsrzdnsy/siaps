<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\Role;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    
    Route::get('/admin/dashboard', [AdminController::class, 
    'AdminDashboard'])->name('admin.dashboard');
    
    Route::get('/admin/logout', [AdminController::class, 
    'AdminLogout'])->name('admin.logout');
    
}); //end group admin middleware

Route::middleware(['auth','role:agen'])->group(function(){
    
Route::get('/agen/dashboard', [AgenController::class, 
'AgenDashboard'])->name('agen.dashboard');

}); //end group agen middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('/siswa', [SiswaController::class, 'SiswaData'])->name('siswa');

Route::get('/siswa/tambah', [SiswaController::class, 'Tambah'])->name('siswa.tambah');

// Route to store a new student in the database
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');


//Route::resource('siswa', SiswaController::class);