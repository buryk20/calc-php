@extends('layouts.app')
@section('titleSeo'){{__('percentage-calculator.seoTitle') }}@endsection
@section('seoMeta')<meta name="description" content="{{__('percentage-calculator.seoDescripton') }}">
<meta name="keywords" content="{{__('percentage-calculator.seoKey') }}">
<meta property="og:description" content="{{__('percentage-calculator.seoDescripton') }}">
@endsection

@section('content')
    <div data-percent-calculator class="percentage">
        <section class="percentage__title-wrp">
            <h1 class="percentage__title">{{__('percentage-calculator.title') }}</h1>
            <p class="percentage__text">{{__('percentage-calculator.textInTitle') }}
            </p>
            <p class="percentage__text">{{__('percentage-calculator.descriptionInTitle') }}
            </p>
        </section>
        <div data-form class="percentage__accuracy-input-wrp">
            <div>
                <span>
                    {{__('global.calculationAccuracy') }}
                </span>
            </div>
            <div data-icon-help class="percentage__help-cont-wrp">
                <img src="/icon/help-icon.svg" alt="help">
                <div data-help-text class="percentage__help-text-wrp">
                    <div data-help-content class="percentage__help-text">
                        <span data-close-help-btn class="percentage__help-btn-close">
                            <span class="percentage__help-btn-line-r"></span>
                            <span class="percentage__help-btn-line-l"></span>
                        </span>
                        <p>
                            {{__('global.numberOfSimbolsAfterComma') }}
                        </p>
                    </div>
                </div>
            </div>
            <div data-btn-disable class="percentage__form-switch-wrp">
                <span class="percentage__form-switch"></span>
            </div>
            <input data-accuracy min="0" disabled value="2" class="percentage__form-input disabled"
                   type="number" placeholder="2">
        </div>
        <section class="percentage__form container-shadow">
            <h2 class="percentage__h2">{{__('percentage-calculator.percentageOfNumberTitle') }}</h2>
            <form class="percentage__form-input-wrp">
                <span>{{__('percentage-calculator.howMach') }}</span>
                <input data-percent-from-number-input-percent class="style-input" type="number">
                <span>{{__('percentage-calculator.percentageOfNumber') }}</span>
                <input data-percent-from-number-input-number class="style-input" type="number">
                <p class="percentage__error">{{__('percentage-calculator.enterValue') }}</p>
            </form>
            <div class="percentage__form-resul-wrp">
                <p class="percentage__form-result-text">{{__('global.result') }}
                    <span class="percentage__form-result-number"
                          data-percent-from-number-result-input-percent>X%</span>{{__('percentage-calculator.ofNumber') }}<span
                        class="percentage__form-result-number"
                        data-percent-from-number-result-input-number>Y</span> = <span
                        class="percentage__form-result-number" data-percent-from-number-result>0</span>
                </p>
            </div>
            <div class="percentage__form-btn-wrp">
                <button data-percent-from-number-result-btn class="btn-result">{{__('global.calculate') }}</button>
                <p data-percent-from-number-error class="percentage__error">{{__('global.fillInAllFields') }}</p>
            </div>
        </section>
        <section class="percentage__form container-shadow">
            <h2 class="percentage__h2">{{__('percentage-calculator.numberFromNumber') }}</h2>
            <form class="percentage__form-input-wrp">
                <span>{{__('percentage-calculator.whatPercentageIsNumber') }}</span>
                <input data-number-from-number-input-first-number class="style-input" type="number">
                <span>{{__('percentage-calculator.ofNumber') }}</span>
                <input data-number-from-number-input-second-number class="style-input" type="number">
                <p class="percentage__error">{{__('global.enterValue') }}</p>
            </form>
            <div class="percentage__form-resul-wrp">
                <p class="percentage__form-result-text">{{__('global.result') }}
                    <span class="percentage__form-result-number"
                          data-number-from-number-result-input-first-number>X</span>{{__('percentage-calculator.ofNumber') }}<span
                        class="percentage__form-result-number"
                        data-number-from-number-result-input-second-number>Y</span>{{__('percentage-calculator.is') }}<span
                        class="percentage__form-result-number" data-number-from-number-result>0</span>%
                </p>
            </div>
            <div class="percentage__form-btn-wrp">
                <button data-number-from-number-result-btn class="btn-result">{{__('global.calculate') }}</button>
                <p data-number-from-number-error class="percentage__error">{{__('global.fillInAllFields') }}</p>
            </div>
        </section>
        <section class="percentage__form container-shadow">
            <h2 class="percentage__h2">{{__('percentage-calculator.numberByItsPercentage') }}</h2>
            <form class="percentage__form-input-wrp">
                <span>{{__('percentage-calculator.fromWhatDate') }}</span>
                <input data-number-from-percent-input-number class="style-input" type="number">
                <span> {{__('percentage-calculator.is') }}</span>
                <input data-number-from-percent-input-percent class="style-input" type="number">
                <span>%? </span>
                <p class="percentage__error">{{__('global.enterValue') }}</p>
            </form>
            <div class="percentage__form-resul-wrp">
                <p class="percentage__form-result-text">{{__('global.result') }}
                    <span class="percentage__form-result-number"
                          data-number-from-percent-result-input-number>X</span> {{__('percentage-calculator.is') }}<span
                        class="percentage__form-result-number"
                        data-number-from-percent-result-input-percent>Y</span>% {{__('percentage-calculator.ofNumber') }} <span
                        class="percentage__form-result-number" data-number-from-percent-result>0</span>
                </p>
            </div>
            <div class="percentage__form-btn-wrp">
                <button data-number-from-percent-result-btn class="btn-result">{{__('global.calculate') }}</button>
                <p data-number-from-percent-error class="percentage__error">{{__('global.fillInAllFields') }}</p>
            </div>
        </section>
        <section class="percentage__form container-shadow">
            <h2 class="percentage__h2">{{__('percentage-calculator.addPercentageToNumber') }}</h2>
            <form class="percentage__form-input-wrp">
                <span>{{__('percentage-calculator.add') }}</span>
                <input data-add-percent-input-percent class="style-input" type="number">
                <span>% {{__('percentage-calculator.toNumber') }}</span>
                <input data-add-percent-input-number class="style-input" type="number">
                <p class="percentage__error">{{__('global.enterValue') }}</p>
            </form>
            <div class="percentage__form-resul-wrp">
                <p class="percentage__form-result-text">{{__('global.result') }}
                    <span class="percentage__form-result-number" data-add-percent-result-input-percent>X</span>%
                    {{__('percentage-calculator.toNumber') }} <span class="percentage__form-result-number"
                                  data-add-percent-result-input-number>Y</span> = <span
                        class="percentage__form-result-number" data-add-percent-result>0</span>
                </p>
            </div>
            <div class="percentage__form-btn-wrp">
                <button data-add-percent-result-btn class="btn-result">{{__('global.calculate') }}</button>
                <p data-add-percent-error class="percentage__error">{{__('global.fillInAllFields') }}</p>
            </div>
        </section>
        <section class="percentage__form container-shadow">
            <h2 class="percentage__h2">{{__('percentage-calculator.subtractPercentageFromNumber') }}</h2>
            <form class="percentage__form-input-wrp">
                <span>{{__('percentage-calculator.subtract') }}</span>
                <input data-subtract-percent-input-percent class="style-input" type="number">
                <span>% {{__('percentage-calculator.fromNumber') }}</span>
                <input data-subtract-percent-input-number class="style-input" type="number">
                <p class="percentage__error">{{__('global.enterValue') }}</p>
            </form>
            <div class="percentage__form-resul-wrp">
                <p class="percentage__form-result-text">{{__('global.result') }}
                    <span class="percentage__form-result-number"
                          data-subtract-percent-result-input-percent>X</span>% {{__('percentage-calculator.fromNumber') }} <span
                        class="percentage__form-result-number"
                        data-subtract-percent-result-input-number>Y</span> = <span
                        class="percentage__form-result-number" data-subtract-percent-result>0</span>
                </p>
            </div>
            <div class="percentage__form-btn-wrp">
                <button data-subtract-percent-result-btn class="btn-result">{{__('global.calculate') }}</button>
                <p data-subtract-percent-error class="percentage__error">{{__('global.fillInAllFields') }}</p>
            </div>
        </section>
        <span class="ups-battery-selection__line-sep"></span>
        <section class="description">
            <h2>{{__('percentage-calculator.descriptionTitle') }}</h2>
            <p>
                {{__('percentage-calculator.descriptionTitleText') }}
            </p>
            <h3>{{__('percentage-calculator.percentageCalculatorFeatures') }}</h3>
            <ul>
                <li>
                    <p><strong>{{__('percentage-calculator.percentageCalculation') }}</strong> {{__('percentage-calculator.percentageCalculationText') }}</p>
                </li>
                <li>
                    <p><strong>{{__('percentage-calculator.calculateNumberByPercentage') }}</strong> {{__('percentage-calculator.calculateNumberByPercentageText') }}</p>
                </li>
                <li>
                    <p><strong>{{__('percentage-calculator.calculationOfNumberByGivenPercentage') }}</strong> {{__('percentage-calculator.calculationOfNumberByGivenPercentageText') }}</p>
                </li>
                <li>
                    <p><strong>{{__('percentage-calculator.operationsWithInterest') }}</strong> {{__('percentage-calculator.operationsWithInterestText') }}</p>
                </li>
            </ul>
            <h3>{{__('percentage-calculator.whyDoYouNeedPercentageCalculator') }}</h3>
            <p>{{__('percentage-calculator.whyDoYouNeedPercentageCalculatorText') }}
            </p>
            <h3>{{__('percentage-calculator.interestApplication') }}</h3>
            <p>{{__('percentage-calculator.interestApplicationText') }}</p>
            <h3>{{__('percentage-calculator.whatIsPercentage') }}</h3>
            <p>{{__('percentage-calculator.whatIsPercentageText') }}</p>
        </section>
    </div>
@endsection
