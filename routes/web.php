<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\index2Controller;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\profileadmController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AdminRegController;
use App\Http\Controllers\daftarmasukController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\statusController;
use App\Http\Controllers\accController;
use App\Http\Controllers\kuisController;


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
    return view('LandingPage');
});

Route::get('/index',function() {
    return view('index');
});

Route::get('/dbmhs', [DashboardController::class, 'dbmhs'])->name('dbmhs'); 
Route::get('/index2', [index2Controller::class,'index2'])->name('index2');
Route::get('/LandingPage', [LandingPageController::class,'LandingPage'])->name('LandingPage');
Route::get('/register', [registerController::class,'register'])->name('register');
Route::post('/simpanregister', [registerController::class, 'simpanregister'])->name('simpanregister');
Route::get('/Login', [LoginController::class,'Login'])->name('Login');

Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/dashboardmhs', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/pendaftaran',[pendaftaranController::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/postdaftar', [pendaftaranController::class, 'postdaftar'])->name('postdaftar');

Route::get('/profil', [profilController::class, 'profil'])->name('profil');
Route::get('/status_pendaftaran',[statusController::class, 'status_pendaftaran'])->name('status_pendaftaran');
Route::get('/AdminPage', [AdminPageController::class,'AdminPage'])->name('AdminPage');
Route::get('/profileadm', [profileadmController::class,'profileadm'])->name('profileadm');
Route::get('/profileadm', [profileadmController::class, 'profileadm']);

Route::get('/LoginAdmin', [LoginAdminController::class,'LoginAdmin'])->name('LoginAdmin');
Route::post('/simpanLogin', [LoginAdminController::class, 'simpanLogin'])->name('simpanLogin');

Route::get('/AdminReg', [AdminRegController::class,'AdminReg'])->name('AdminReg');
Route::post('/postAdminReg', [AdminRegController::class, 'postAdminReg'])->name('postAdminReg');

Route::get('/daftarmasuk', [daftarmasukController::class,'daftarmasuk'])->name('daftarmasuk');
Route::get('/rekap', [AdminPageController::class,'rekap'])->name('rekap');

Route::get('/print', [AdminPageController::class, 'print'])->name('print');

Route::get('/acc', [accController::class, 'acc'])->name('acc');
Route::post('/postacc', [accController::class, 'postacc'])->name('postacc');


Route::get('/kuis', [kuisController::class, 'kuis'])->name('kuis');
Route::post('/postkuis', [kuisController::class, 'postkuis'])->name('postkuis');

Route::post('/search', [statusController::class, 'search'])->name('search');



