<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
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



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    $controller = new MainController();
    $controller->defineRoutes('/', 'home');
    $controller->defineRoutes('kalkulyator-podbora-akb-dlya-ibp', 'kalkulyator-podbora-akb-dlya-ibp');
    $controller->defineRoutes('percentage-calculator', 'percentage-calculator');
    $controller->defineRoutes('text-layout-checker', 'text-layout-checker');
    $controller->defineRoutes('raschet-vremeni-avtonomnoy-raboty-IBP', 'raschet-vremeni-avtonomnoy-raboty-IBP');
    $controller->defineRoutes('raschet-ploshchadi-pryamougolnika', 'raschet-ploshchadi-pryamougolnika');
});

Route::get('pages/{pageSlug}', [PageController::class, 'showPage'])->name('app');

Route::get('ru/{any}', function ($any) {
    return redirect('/' . $any);
})->where('any', '.*');

