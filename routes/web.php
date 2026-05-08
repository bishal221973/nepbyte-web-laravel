<?php

use App\Http\Controllers\BrandCategoryController;
use App\Http\Controllers\BrandingServiceController;
use App\Http\Controllers\BrandPortfolioController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContentCategoryController;
use App\Http\Controllers\ContentImageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MarketingCategoryController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\PrintCategoryController;
use App\Http\Controllers\PrintPortfolioController;
use App\Http\Controllers\TeamController;
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
Route::get('content-production/{contentCategory:slug}', [FrontController::class, 'productionShow'])->name('front.productionShow');
Route::get('our-team', [FrontController::class, 'team'])->name('front.team');
Route::get('collaboration', [FrontController::class, 'collaboration'])->name('front.collaboration');

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


        Route::resource('print-category', PrintCategoryController::class);
        Route::get('print-design', [PrintPortfolioController::class,'index'])->name('print-design.index');
        Route::post('print-design', [PrintPortfolioController::class,'store'])->name('print-design.store');
        Route::get('edit/{id}', [PrintPortfolioController::class,'edit'])->name('print-design.edit');
        Route::post('update/{id}', [PrintPortfolioController::class,'update'])->name('print-design.update');
        Route::delete('delete/{id}', [PrintPortfolioController::class,'destroy'])->name('print-design.destroy');
        // Route::post('/brand-category/{id}/toggle-status', [BrandCategoryController::class, 'toggleStatus'])
        //     ->name('brand.category.toggle-status');
        // Route::post('/branding-category/sort', [BrandCategoryController::class, 'sort'])
        //     ->name('brand-category.sort');
    });

    Route::prefix('content-productions')->group(function () {
        Route::resource('content-category', ContentCategoryController::class);
        Route::post('/leading-brands/{id}/toggle-status', [ContentCategoryController::class, 'toggleStatus'])
            ->name('content-category.toggle-status');

        Route::resource('content-image', ContentImageController::class);
    });

    Route::resource('team', TeamController::class);

    Route::prefix('marketing')->group(function () {
        Route::resource('marketting-category', MarketingCategoryController::class);
        Route::get('content', [MarketingController::class, 'index'])->name('marketing.index');
        Route::post('content/store', [MarketingController::class, 'store'])->name('marketing.store');
        Route::get('content/{marketing}/edit', [MarketingController::class, 'edit'])->name('marketing.edit');
        Route::put('content/{marketing}/update', [MarketingController::class, 'update'])->name('marketing.update');
        Route::delete('content/{marketing}/delete', [MarketingController::class, 'delete'])->name('marketing.delete');
    });
});
