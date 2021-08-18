<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Spatie\Analytics\Period;

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
    // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
    return view('user');
});


Route::get('/galeri', function () {
    return view('admin.galeri');
});

Route::get('/blog', function () {
    return view('admin.blog');
});

Route::get('/menu', function () {
    return view('admin.menu');
});

Route::get('/trending', function () {
    return view('admin.trending');
});

Route::get('/slide', function () {
    return view('admin.slide');
});

Route::get('/sosmed', function () {
    return view('admin.sosmed');
});

Route::get('/video', function () {
    return view('admin.video');
});

// Route::get('/user', function () {
//     return view('user');
// });

Route::resource('trending', TrendingController::class);
Route::resource('menu', MenuController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('blog', BlogController::class);
Route::resource('/', UserController::class);
Route::resource('slide', SlideController::class);
Route::resource('sosmed', SosmedController::class);
Route::resource('video', VideoController::class);
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/detailblog/{id}', [App\Http\Controllers\UserController::class, 'artikels'])->name('detailblog');
Route::get('/detailtrending/{id}', [App\Http\Controllers\UserController::class, 'trens'])->name('detailtrending');
