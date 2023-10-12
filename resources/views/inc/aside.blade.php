<div data-navigation-wrp-page class="navigation">
    <div class="navigation__wrp">
{{--        <a href="{{ route('home')}}">--}}
{{--            <h2 class="navigation__item-text">Главная</h2>--}}
{{--        </a>--}}
{{--        <a href="{{ route('contact')}}">--}}
{{--            <h2 class="navigation__item-text">Контакты</h2>--}}
{{--        </a>--}}
        <a data-navigation-page-link class="navigation__link" href="/">
            <h2 class="navigation__item-text" class="navigation__item-text">{{__('global.mainPage') }}</h2>
        </a>
        <a data-navigation-page-link class="navigation__link" href="{{ route('kalkulyator-podbora-akb-dlya-ibp')}}">
            <h2 class="navigation__item-text" class="navigation__item-text">{{__('global.pageAkb') }}</h2>
        </a>
        <a data-navigation-page-link class="navigation__link" href="{{ route('percentage-calculator')}}">
            <h2 class="navigation__item-text" class="navigation__item-text">{{__('percentage-calculator.title') }}</h2>
        </a>
        <a data-navigation-page-link class="navigation__link" href="{{ route('text-layout-checker')}}">
            <h2 class="navigation__item-text" class="navigation__item-text">{{__('global.textLayoutChecker') }}</h2>
        </a>
        <a data-navigation-page-link class="navigation__link" href="{{ route('raschet-vremeni-avtonomnoy-raboty-IBP')}}">
            <h2 class="navigation__item-text" class="navigation__item-text">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.title') }}</h2>
        </a>
        <a data-navigation-page-link class="navigation__link" href="{{ route('raschet-ploshchadi-pryamougolnika')}}">
            <h2 class="navigation__item-text" class="navigation__item-text">{{__('raschet-ploshchadi-pryamougolnika.title') }}</h2>
        </a>
    </div>
</div>

