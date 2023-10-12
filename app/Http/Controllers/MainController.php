<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function defineRoutes($link, $viewName) {
        Route::get('/' . $link, function () use ($viewName) {
        return View::make($viewName);
        })->name($viewName);
    }
}
