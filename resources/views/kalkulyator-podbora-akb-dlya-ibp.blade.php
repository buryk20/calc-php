@extends('layouts.app')
@section('titleSeo'){{__('kalkulyator-podbora-akb-dlya-ibp.seoTitle') }}@endsection
@section('seoMeta')<meta name="description" content="{{__('kalkulyator-podbora-akb-dlya-ibp.seoDescripton') }}">
<meta name="keywords" content="{{__('kalkulyator-podbora-akb-dlya-ibp.seoKey') }}">
<link rel="canonical" href="{{ str_replace("/ru/", "/", route('kalkulyator-podbora-akb-dlya-ibp')) }}">
@endsection
@section('content')
        <div data-upd-battery-selection class="ups-battery-selection">
            <section class="ups-battery-selection__title-wrp">
                <h1 class="ups-battery-selection__title">{{__('kalkulyator-podbora-akb-dlya-ibp.title') }}</h1>
                <h2 class="ups-battery-selection__text">{{__('kalkulyator-podbora-akb-dlya-ibp.titleText') }}
                </h2>
            </section>
            <h2 class="ups-battery-selection__h2">{{__('kalkulyator-podbora-akb-dlya-ibp.titleCalculation') }}
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
                              {{__('kalkulyator-podbora-akb-dlya-ibp.workingTime') }}
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
                                            {{__('kalkulyator-podbora-akb-dlya-ibp.workingTimeHelp') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="ups-battery-selection__error">{{__('kalkulyator-podbora-akb-dlya-ibp.enterValue') }}</p>
                        <input data-tame-work class="ups-battery-selection__form-input" type="number">
                    </div>
                </form>
                <div class="ups-battery-selection__form-resul-wrp">
                    <p class="ups-battery-selection__form-result-title">{{__('kalkulyator-podbora-akb-dlya-ibp.result') }}</p>
                    <p class="ups-battery-selection__form-result-text">{{__('kalkulyator-podbora-akb-dlya-ibp.resultText') }} <span class="ups-battery-selection__form-result-number" data-result>0</span></p>
                    <button data-result-btn class="ups-battery-selection__btn-result">{{__('kalkulyator-podbora-akb-dlya-ibp.btnCalculate') }}</button>
                </div>
            </section>
            <span class="ups-battery-selection__line-sep"></span>
            <section class="description">
                <h2>{{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitle') }}</h2>
                <ul>
                    <li>
                        <p>
                            {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_1') }}
                        </p>
                        <p>
                            {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_1_1') }}
                        </p>
                    </li>
                    <li>
                        <p>{{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_2') }}</p>
                        <p>
                            {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_2_1') }}
                        </p>
                    </li>
                    <li>
                        <p>
                            {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_3') }}
                        </p>
                        <p>
                            {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_3_1') }}
                        </p>
                    </li>
                    <li>
                        <p>
                            {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionTitleItem_4') }}
                        </p>
                    </li>
                </ul>
                <p>
                    {{__('kalkulyator-podbora-akb-dlya-ibp.descriptionConclusion') }}
                </p>
                <p>
                    {{__('kalkulyator-podbora-akb-dlya-ibp.recommendation') }}
                </p>
            </section>
        </div>
@endsection
