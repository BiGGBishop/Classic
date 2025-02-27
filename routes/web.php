<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/services', [FrontendController::class, 'services'])->name('service');
Route::get('/services/{id}/details', [FrontendController::class, 'servicesShow'])->name('service.details');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/products/{id}/details', [FrontendController::class, 'productsShow'])->name('product.details');
Route::post('/purchase', [FrontendController::class, 'purchaseStore'])->name('purchase.store');
Route::get('/services/remodeling-bathroom-homes', [FrontendController::class, 'remodelingBathroomHomes'])->name('service-details-remodeling-bathroom-homes');
Route::get('/services/interior-design', [FrontendController::class, 'interiorDesign'])->name('service-details-interior-design');
Route::get('/services/project-management', [FrontendController::class, 'projectManagement'])->name('service-details-project-management');
Route::get('/services/cleaning-services', [FrontendController::class, 'cleaningServices'])->name('service-details-cleaning-services');
Route::get('/services/solar-analysis', [FrontendController::class, 'solarAnalysis'])->name('service-details-solar-analysis');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Product Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/purchase', [ProductController::class, 'puchase'])->name('purchase.index');
    Route::put('/purchases/{id}/update', [ProductController::class, 'PurchaseUpdate'])->name('purchases.update');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
