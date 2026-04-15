<?php

use App\Http\Controllers\FrontController;
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
    return view(view: 'front.home');
});
Route::get('strategy',[FrontController::class,'strategy'])->name('front.strategy');
Route::get('development',[FrontController::class,'development'])->name('front.development');
Route::get('brands-development',[FrontController::class,'brand'])->name('front.brand');
Route::get('ai-automation',[FrontController::class,'ai'])->name('front.ai');
Route::get('print-design',[FrontController::class,'printDesign'])->name('front.print-design');
Route::get('marketing',[FrontController::class,'marketing'])->name('front.marketing');
Route::get('content-production',[FrontController::class,'production'])->name('front.production');
Route::get('content-production/show',[FrontController::class,'productionShow'])->name('front.productionShow');
