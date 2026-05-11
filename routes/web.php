<?php

use App\Http\Controllers\BrandCategoryController;
use App\Http\Controllers\BrandingServiceController;
use App\Http\Controllers\BrandPortfolioController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContentCategoryController;
use App\Http\Controllers\ContentImageController;
use App\Http\Controllers\DevelopmentCategoryController;
use App\Http\Controllers\DevelopmentProjectController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MarketingCategoryController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\PrintCategoryController;
use App\Http\Controllers\PrintPortfolioController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\TeamController;
use App\Models\Brands;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

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
Route::post('collaboration-store', [FrontController::class, 'collaborationStore'])->name('front.collaboration.store');
Route::post('partner-store', [FrontController::class, 'partnerStore'])->name('front.partner.store');

Auth::routes();

Route::middleware(['auth'])->group(function () {
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
            Route::get('print-design', [PrintPortfolioController::class, 'index'])->name('print-design.index');
            Route::post('print-design', [PrintPortfolioController::class, 'store'])->name('print-design.store');
            Route::get('edit/{id}', [PrintPortfolioController::class, 'edit'])->name('print-design.edit');
            Route::post('update/{id}', [PrintPortfolioController::class, 'update'])->name('print-design.update');
            Route::delete('delete/{id}', [PrintPortfolioController::class, 'destroy'])->name('print-design.destroy');
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

        Route::prefix('development')->group(function () {
            Route::resource('development-category', DevelopmentCategoryController::class);
            Route::get('content', [DevelopmentProjectController::class, 'index'])->name('developmentProject.index');
            Route::post('content/store', [DevelopmentProjectController::class, 'store'])->name('developmentProject.store');
            Route::get('content/{developmentProject}/edit', [DevelopmentProjectController::class, 'edit'])->name('developmentProject.edit');
            Route::put('content/{developmentProject}/update', [DevelopmentProjectController::class, 'update'])->name('developmentProject.update');
            Route::delete('content/{developmentProject}/delete', [DevelopmentProjectController::class, 'delete'])->name('developmentProject.delete');
        });

        Route::prefix('setting')->group(function () {
            Route::resource('seo', SeoController::class);
        });
    });
});



Route::get('generate-sitemap',function(){

Sitemap::create()
    ->add(
        Url::create('https://surkhetsoft.com/')
            ->setLastModificationDate(Carbon::yesterday())
            ->setPriority(1.0)
    )
    ->add(
        Url::create('https://surkhetsoft.com/collaboration')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(1.0)
    )
     ->add(
        Url::create('https://surkhetsoft.com/our-team')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/strategy')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/brands-development')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/print-design')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/content-production')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/marketing')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/development')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/ai-automation')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
    ->writeToFile(public_path('sitemap.xml'));
});
// __DIR__.'/sitemap.php';