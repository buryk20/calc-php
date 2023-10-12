@extends('layouts.app')
@section('titleSeo'){{__('raschet-ploshchadi-pryamougolnika.seoTitle') }}@endsection
@section('seoMeta')
    <meta name="description" content="{{__('raschet-ploshchadi-pryamougolnika.seoDescripton') }}">
    <meta name="keywords" content="{{__('raschet-ploshchadi-pryamougolnika.seoKey') }}">
    <link rel="canonical" href="{{ str_replace("/ru/", "/", route('raschet-ploshchadi-pryamougolnika')) }}">
@endsection
@section('content')
    <div data-raschet-ploshchadi-pryamougolnika class="ups-battery-selection raschet-ploshchadi-pryamougolnika">
        <section class="ups-battery-selection__title-wrp">
            <h1 class="ups-battery-selection__title">{{__('raschet-ploshchadi-pryamougolnika.title') }}</h1>
            <h2 class="ups-battery-selection__text">{{__('raschet-ploshchadi-pryamougolnika.titleText') }}
            </h2>
        </section>
        <img class="raschet-ploshchadi-pryamougolnika__img" src="/img/rectangle-img.png"
             alt="{{__('raschet-ploshchadi-pryamougolnika.title') }}">
        <section class="custom-dropdown raschet-ploshchadi-pryamougolnika__dropdown-wrp">
            <p>{{__('raschet-ploshchadi-pryamougolnika.selectUnitMeasurement') }}</p>
            <div data-custom-dropdown class="custom-dropdown__wrp-input">
                <div data-dropdown-input-wrp class="custom-dropdown__wrp-input-arrow">
                    <input data-dropdown-input type="text" class="custom-dropdown__input" value="">
                    <img src="/icon/arrow-dropdown-icon.svg" alt="">
                </div>
                <i class="arrow-down"></i>
                <ul data-dropdown-list class="dropdown-list">
                    <li data-value="мм²">мм²</li>
                    <li data-value="см²">см²</li>
                    <li data-value="км²">км²</li>
                </ul>
            </div>
        </section>
        <section class="ups-battery-selection__form">
            <form data-form class="ups-battery-selection__form-wrp">
                <div class="ups-battery-selection__form-input-wrp">
                    <div class="ups-battery-selection__form-wrp-text">
                                <span>
                                    {{__('raschet-ploshchadi-pryamougolnika.sideA') }}
                                </span>
                        <div data-icon-help class="ups-battery-selection__help-cont-wrp">
                            <img src="/icon/help-icon.svg" alt="help">
                            <div data-help-text class="ups-battery-selection__help-text-wrp">
                                <div data-help-content class="ups-battery-selection__help-text">
                                            <span data-close-help-btn class="ups-battery-selection__help-btn-close">
                                                <span class="ups-battery-selection__help-btn-line-r"></span>
                                                <span class="ups-battery-selection__help-btn-line-l"></span>
                                            </span>
                                    <p>
                                        {{__('raschet-ploshchadi-pryamougolnika.sideAHelp') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p data-input-selection-error class="ups-battery-selection__error">{{__('raschet-ploshchadi-pryamougolnika.enterValue') }}</p>
                    <input data-side class="ups-battery-selection__form-input" type="number">
                </div>
                <div class="ups-battery-selection__form-input-wrp">
                    <div class="ups-battery-selection__form-wrp-text">
                                <span>
                                    {{__('raschet-ploshchadi-pryamougolnika.sideB') }}
                                </span>
                        <div data-icon-help class="ups-battery-selection__help-cont-wrp">
                            <img src="/icon/help-icon.svg" alt="help">
                            <div data-help-text class="ups-battery-selection__help-text-wrp">
                                <div data-help-content class="ups-battery-selection__help-text">
                                            <span data-close-help-btn class="ups-battery-selection__help-btn-close">
                                                <span class="ups-battery-selection__help-btn-line-r"></span>
                                                <span class="ups-battery-selection__help-btn-line-l"></span>
                                            </span>
                                    <p>
                                        {{__('raschet-ploshchadi-pryamougolnika.sideBHelp') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p data-input-selection-error class="ups-battery-selection__error">{{__('raschet-ploshchadi-pryamougolnika.enterValue') }}</p>
                    <input data-side class="ups-battery-selection__form-input" type="number">
                </div>
            </form>
            <div class="ups-battery-selection__form-resul-wrp">
                <p class="ups-battery-selection__form-result-title">{{__('raschet-ploshchadi-pryamougolnika.result') }}</p>
                <p class="ups-battery-selection__form-result-text">{{__('raschet-ploshchadi-pryamougolnika.areaOfRectangle') }}
                    <span class="raschet-ploshchadi-pryamougolnika__res"
                          class="ups-battery-selection__form-result-number" data-result>0</span><span
                        data-unit-measurement></span>
                </p>
                <button data-result-btn class="ups-battery-selection__btn-result">{{__('raschet-ploshchadi-pryamougolnika.calculate') }}</button>
            </div>
        </section>
        <span class="ups-battery-selection__line-sep"></span>
        <section class="description">
            <h3>
                {{__('raschet-ploshchadi-pryamougolnika.onlineCalculatorDescriptionTitle') }}
            </h3>
        </section>
    </div>
@endsection
