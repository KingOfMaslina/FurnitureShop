<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/admin', function () {
      return view('welcome');
   });

    Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.index');
    Route::get('/userblog', [\App\Http\Controllers\FrontendController::class, 'blog'])->name('frontend.blog');
    Route::get('/userprod', [\App\Http\Controllers\FrontendController::class, 'product'])->name('frontend.product');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');
        Route::resource('/category',\App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('/product',\App\Http\Controllers\Admin\ProductController::class);
        Route::resource('/blog',\App\Http\Controllers\Admin\BlogController::class);
        Route::resource('/about',\App\Http\Controllers\Admin\AboutController::class);
        Route::resource('/text',\App\Http\Controllers\Admin\TextController::class);
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/blog_card/{id}', [\App\Http\Controllers\FrontendController::class, 'blog_card'])->name('frontend.blog_card');
        Route::get('/product_full/{id}', [\App\Http\Controllers\FrontendController::class, 'product_full'])->name('frontend.product_full');
    });

    require __DIR__.'/auth.php';
});
