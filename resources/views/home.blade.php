@extends('layouts.app')
@section('titleSeo'){{__('home.titleSeo') }}@endsection
@section('seoMeta')<meta name="description" content="{{__('home.seoDescripton') }}">
<meta name="keywords" content="{{__('home.seoKey') }}">
<meta property="og:title" content="{{__('home.titleSeo') }}">
<meta property="og:description" content="{{__('home.seoDescripton') }}">
@endsection
@section('content')
    <div class="main__content-wrp">
        <section class="main__title-wrp">
            <h1 class="main__title">{{__('home.title') }}</h1>
            <div class="home__wrp">
                <img class="home__img" src="/icon/logo-header.svg" alt="Calculator universal">
                <div class="home__text-wrp">
                    <h2>
                        <a class="link" href="/kalkulyator-podbora-akb-dlya-ibp">{{__('home.calculatorAkbLink') }}</a>
                    </h2>
                    <p>
                        {{__('home.calculatorAkbText') }}
                    </p>
                    <h2>
                        <a class="link" href="/percentage-calculator">{{__('home.percentageCalc') }}</a>
                    </h2>
                    <p>
                        {{__('home.percentageCalcText') }}
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
