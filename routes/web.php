<?php

use App\Http\Controllers\BrandCategoryController;
use App\Http\Controllers\BrandingServiceController;
use App\Http\Controllers\BrandPortfolioController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContentCategoryController;
use App\Http\Controllers\FrontController;
use App\Models\Brands;
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
    $brands = Brands::latest()->get();
    return view('front.home', [
        'brands' => $brands
    ]);
});
Route::get('strategy', [FrontController::class, 'strategy'])->name('front.strategy');
Route::get('development', [FrontController::class, 'development'])->name('front.development');
Route::get('brands-development', [FrontController::class, 'brand'])->name('front.brand');
Route::get('ai-automation', [FrontController::class, 'ai'])->name('front.ai');
Route::get('print-design', [FrontController::class, 'printDesign'])->name('front.print-design');
Route::get('marketing', [FrontController::class, 'marketing'])->name('front.marketing');
Route::get('content-production', [FrontController::class, 'production'])->name('front.production');
Route::get('content-production/show', [FrontController::class, 'productionShow'])->name('front.productionShow');
Route::get('our-team', [FrontController::class, 'team'])->name('front.team');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('leading-brands', BrandsController::class);
    Route::prefix('brands')->group(function () {
        Route::resource('branding-services', BrandingServiceController::class);
        Route::post('/leading-brands/{id}/toggle-status', [BrandingServiceController::class, 'toggleStatus'])
            ->name('leading-brands.toggle-status');
        Route::post('/branding-services/sort', [BrandingServiceController::class, 'sort'])
            ->name('branding-services.sort');


        Route::resource('brand-portfolio', BrandPortfolioController::class);
        Route::post('/brand-portfolio/{id}/toggle-status', [BrandPortfolioController::class, 'toggleStatus'])
            ->name('brand.portfolio.toggle-status');

        Route::resource('brand-category', BrandCategoryController::class);
        Route::post('/brand-category/{id}/toggle-status', [BrandCategoryController::class, 'toggleStatus'])
            ->name('brand.category.toggle-status');
        Route::post('/branding-category/sort', [BrandCategoryController::class, 'sort'])
            ->name('brand-category.sort');
    });

     Route::prefix('content-productions')->group(function () {
        Route::resource('content-category', ContentCategoryController::class);
        Route::post('/leading-brands/{id}/toggle-status', [ContentCategoryController::class, 'toggleStatus'])
            ->name('content-category.toggle-status');
        


       
    });
});
