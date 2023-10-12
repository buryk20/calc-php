@extends('layouts.app')
@section('titleSeo'){{__('raschet-vremeni-avtonomnoy-raboty-IBP.seoTitle') }}@endsection
@section('seoMeta')
    <meta name="description" content="{{__('raschet-vremeni-avtonomnoy-raboty-IBP.seoDescripton') }}">
    <meta name="keywords" content="{{__('raschet-vremeni-avtonomnoy-raboty-IBP.seoKey') }}">
    <link rel="canonical" href="{{ str_replace("/ru/", "/", route('raschet-vremeni-avtonomnoy-raboty-IBP')) }}">
@endsection
@section('content')
    <div data-raschet-vremeni-avtonomnoy-raboty-IBP class="ups-battery-selection">
        <section class="ups-battery-selection__title-wrp">
            <h1 class="ups-battery-selection__title">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.title') }}</h1>
            <h2 class="ups-battery-selection__text">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.titleText') }}
            </h2>
        </section>
        <h2 class="ups-battery-selection__h2">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.titleCalculation') }}
        </h2>
        <section class="ups-battery-selection__form">
            <form data-form class="ups-battery-selection__form-wrp">
                <div class="ups-battery-selection__form-input-wrp">
                    <div class="ups-battery-selection__form-wrp-text">
                            <span>
                                {{__('kalkulyator-podbora-akb-dlya-ibp.loadW') }}
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
                                        {{__('kalkulyator-podbora-akb-dlya-ibp.loadWHelp') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="ups-battery-selection__error">{{__('kalkulyator-podbora-akb-dlya-ibp.enterValue') }}</p>
                    <input data-load-w class="ups-battery-selection__form-input" type="number">
                </div>
                <div class="ups-battery-selection__form-input-wrp">
                    <div class="ups-battery-selection__form-wrp-text">
                        <div>
                                <span>
                                    {{__('kalkulyator-podbora-akb-dlya-ibp.inverterEfficiency') }}
                                </span>
                        </div>
                        <div data-icon-help class="ups-battery-selection__help-cont-wrp">
                            <img src="/icon/help-icon.svg" alt="help">
                            <div data-help-text class="ups-battery-selection__help-text-wrp">
                                <div data-help-content class="ups-battery-selection__help-text">
                                        <span data-close-help-btn class="ups-battery-selection__help-btn-close">
                                            <span class="ups-battery-selection__help-btn-line-r"></span>
                                            <span class="ups-battery-selection__help-btn-line-l"></span>
                                        </span>
                                    <p>
                                        {{__('kalkulyator-podbora-akb-dlya-ibp.inverterEfficiencyHelp') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div data-btn-disable class="ups-battery-selection__form-switch-wrp">
                            <span class="ups-battery-selection__form-switch"></span>
                        </div>
                    </div>
                    <input data-kpd-invertor disabled value="80" class="ups-battery-selection__form-input disabled"
                           type="number" placeholder="80">
                </div>
                <div class="ups-battery-selection__form-input-wrp">
                    <div class="ups-battery-selection__form-wrp-text">
                            <span>
                                {{__('kalkulyator-podbora-akb-dlya-ibp.ratedBatteryVoltage') }}
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
                                        {{__('kalkulyator-podbora-akb-dlya-ibp.ratedBatteryVoltageHelp') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="ups-battery-selection__error">{{__('kalkulyator-podbora-akb-dlya-ibp.enterValue') }}</p>
                    <input data-rated-voltage class="ups-battery-selection__form-input" type="number">
                </div>
                <div class="ups-battery-selection__form-input-wrp">
                    <div class="ups-battery-selection__form-wrp-text">
                            <span>
                              {{__('raschet-vremeni-avtonomnoy-raboty-IBP.battaryCapacity') }}
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
                                        {{__('raschet-vremeni-avtonomnoy-raboty-IBP.battaryCapacityHelp') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p data-input-selection-error class="ups-battery-selection__error">{{__('kalkulyator-podbora-akb-dlya-ibp.enterValue') }}</p>
                    <input data-capacity-akb class="ups-battery-selection__form-input" type="number">
                </div>
            </form>
            <div class="ups-battery-selection__form-resul-wrp">
                <p class="ups-battery-selection__form-result-title">{{__('kalkulyator-podbora-akb-dlya-ibp.result') }}</p>
                <p class="ups-battery-selection__form-result-text">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.resultText') }} <span class="ups-battery-selection__form-result-number" data-result>0</span></p>
                <button data-result-btn class="ups-battery-selection__btn-result">{{__('kalkulyator-podbora-akb-dlya-ibp.btnCalculate') }}</button>
            </div>
        </section>
        <span class="ups-battery-selection__line-sep"></span>
        <section class="description">
            <h2>
                {{__('raschet-vremeni-avtonomnoy-raboty-IBP.descriptionTitle') }}
            </h2>
            <P>
                {{__('raschet-vremeni-avtonomnoy-raboty-IBP.instructionsForUse') }}
            </P>
            <ol>
                <li>
                    {{__('raschet-vremeni-avtonomnoy-raboty-IBP.instructionsForUse_1') }}
                </li>
                <li>
                    {{__('raschet-vremeni-avtonomnoy-raboty-IBP.instructionsForUse_2') }}
                </li>
                <li>
                    {{__('raschet-vremeni-avtonomnoy-raboty-IBP.instructionsForUse_3') }}
                </li>
                <li>
                    {{__('raschet-vremeni-avtonomnoy-raboty-IBP.instructionsForUse_4') }}
                </li>
            </ol>
            <p>
                {{__('raschet-vremeni-avtonomnoy-raboty-IBP.afterAllFields') }}
            </p>
            <p>
                {{__('raschet-vremeni-avtonomnoy-raboty-IBP.usingAnOnlineCalculator') }} <a class="link" href="/kalkulyator-podbora-akb-dlya-ibp">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.usingAnOnlineCalculatorLink') }}</a>
            </p>
        </section>
    </div>
@endsection
