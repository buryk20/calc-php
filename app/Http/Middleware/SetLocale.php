<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;



class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        $languageSegment = $request->segment(1);
//
//        if (in_array($languageSegment, ['ua', 'ru'])) {
//            app()->setLocale($languageSegment);
//        }


        return $next($request);
    }

//    public function handle($request, Closure $next)
//    {
//        $locale = $request->segment(1); // Получаем значение первого сегмента URL
//        if (!in_array($locale, ['en', 'ru'])) {
//            $locale = config('app.fallback_locale'); // Используем язык по умолчанию, если не передан правильный
//        }
//        App::setLocale($locale); // Устанавливаем текущую локаль для приложения
//
//        return $next($request);
//    }
}
