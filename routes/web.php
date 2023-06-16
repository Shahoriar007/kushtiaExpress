<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeaderSliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\ProductsController;



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

Route::get('/welcome', function () {
    return view('welcome');
});




// User Side starts
// Home
Route::get('/', [HomeController::class, 'home'])->name('homepage');
// About us
Route::get('/about', [HomeController::class, 'about'])->name('aboutus');
// Contact us
Route::get('/contact', [HomeController::class, 'contact'])->name('contactus');
// User side ends

// Admin side starts 
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'adminHome'])->name('dashboard');
    // Header Slider
    Route::get('/headerSlider', [HeaderSliderController::class, 'headerSlider'])->name('headerSlider');
        // Add accessories
    Route::get('/accessories', [AccessoriesController::class, 'accessories'])->name('accessories');
        // Add Products
    Route::get('/products', [ProductsController::class, 'products'])->name('products');


});

// Admin side ends







// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
