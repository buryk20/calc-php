@extends('layouts.app')
@section('titleSeo'){{__('text-layout-checker.seoTitle') }}@endsection
@section('seoMeta')<meta name="description" content="{{__('text-layout-checker.seoDescripton') }}">
<meta name="keywords" content="{{__('text-layout-checker.seoKey') }}">
<meta property="og:description" content="{{__('text-layout-checker.seoDescripton') }}">
<link rel="canonical" href="{{ str_replace("/ru/", "/", route('text-layout-checker')) }}">
@endsection

@section('content')
    <div data-text-layout-checker class="main__content-width ">
        <section class="main__title-wrp">
            <h1 class="main__title">{{__('global.textLayoutChecker') }}</h1>
            <p class="main__text">{{__('text-layout-checker.descriptionTop') }}</p>
        </section>
        <section class="layout__form-wrp">
            <p class="layout__text-input-label">{{__('text-layout-checker.yourText') }}</p>
            <div class="layout__text-input-wrp">
                <div data-text-layout-checker-input-area class="layout__text-input" contenteditable="true">
                </div>
                <img data-text-layout-checker-input-area-copy-btn class="layout__text-input-copy-btn"
                     src="/icon/copy-icon.svg" alt="Копировать текст в буфер обмена">
                <div data-text-layout-checker-input-area-copy-msg class="layout__text-input-copy-message">
                    <p>{{__('text-layout-checker.copied') }}</p>
                </div>
            </div>
            <div class="layout__controls-wrp">
                <button data-text-layout-checker-find-cirillic-btn class="btn-result">{{__('text-layout-checker.findCyrillic') }}</button>
                <button data-text-layout-checker-find-latin-btn class="btn-result">{{__('text-layout-checker.findLatinAlphabet') }}</button>
                <button data-text-layout-checker-clear-btn class="btn-result">{{__('text-layout-checker.cleanItUop') }}
            </div>
        </section>
        <span class="line"></span>
        <section class="description">
            <h2>{{__('text-layout-checker.descriptionTitle') }}</h2>
            <ul>
                <li>
                    <p>{{__('text-layout-checker.descriptionTitle_1') }}</p>
                </li>
                <li>
                    <p>{{__('text-layout-checker.descriptionTitle_2') }}</p>
                </li>
                <li>
                    <p>{{__('text-layout-checker.descriptionTitle_3') }}</p>
                </li>
                <li>
                    <p>{{__('text-layout-checker.descriptionTitle_4') }}</p>
                </li>
            </ul>
        </section>
    </div>
@endsection
