<?php

use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteFileRegistrar;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\UserController;

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

require __DIR__ . '/auth.php';


//group admin middleware
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [
        AdminController::class,
        'AdminDashboard'
    ])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profil', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profil/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

}); //end group admin middleware

//group middleware user

//group agen middleware
Route::middleware(['auth', 'role:agen'])->group(function () {

    Route::get('/agen/dashboard', [
        AgenController::class,
        'AgenDashboard'
    ])->name('agen.dashboard');
}); //end group agen middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


//routes untuk semua
Route::resource('siswa', SiswaController::class);
Route::resource('keluarga', KeluargaController::class);
Route::resource('user', UserController::class);
//end routes

Route::get('/home', [HomeController::class, 'index'])->name('home');


// halaman utama
Route::get('/home', [UtamaController::class, 'home']);

Route::get('/profil', [UtamaController::class, 'profil']);

Route::get('/contact', [UtamaController::class, 'contact']);

Route::get('/login_siaps', [AuthenticatedSessionController::class, 'login']);

Route::get('/register_siaps', [RegisteredUserController::class, 'register']);


Route::get('/downloadpdf', [SiswaController::class, 'downloadpdf']);