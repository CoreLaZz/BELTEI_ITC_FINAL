<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

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
    return view('client.index');
});
// Client site 
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::controller(ClientController::class)->group(function () {
    Route::get('contact', 'contact')->name('contact');  
    Route::get('news', 'news')->name('news');
    Route::get('service', 'service')->name('service');
    Route::get('mainnews', 'mainnews')->name('mainnews');
    Route::get('about', 'about')->name('about');
    Route::get('copyrighttext', 'copyrighttext');
    // Route::post('/orders', 'store');
})->middleware(['auth', 'verified']);


Route::controller(AdminController::class)->group(function () {
    Route::get('user', 'user')->name('user');
    // Route::post('/orders', 'store');
})->middleware(['auth', 'verified', 'admin']);

// Route::get('/contact', [ClientController::class, 'contact'])->middleware(['auth', 'verified'])->name('contact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes

require __DIR__ . '/auth.php';
