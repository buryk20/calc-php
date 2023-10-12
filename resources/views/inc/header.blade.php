<header class="header">
    <div class="header__wrp">
        <a href="/">
            <img class="header__logo-img" src="/icon/logo-header.svg" alt="calculator universal">
        </a>
        <div>
            <div class="header__locale-wrp">
                <div data-lang-ru class="header__locale-item-wrp">
                    <a class="header__locale-ru" href="{{ LaravelLocalization::getLocalizedURL('ru') }}">ru</a>
                    <span class="header__locale-line-active"></span>
                </div>
                <span class="header__locale-line"></span>
                <div data-lang-ua class="header__locale-item-wrp">
                    <a class="header__locale-ua" href="{{ LaravelLocalization::getLocalizedURL('ua') }}">
                        <img class="header__locale-ua-icon" src="/icon/locale-icon.svg" alt="ua">
                        <p>ua</p>
                    </a>
                    <!-- <span class="header__locale-line-active active"></span> -->
                </div>
            </div>
            <div data-wrp-mob-menu>
                <div data-burger class="header__menu-wrp">
                    <button class="header__menu-btn-wrp">
                        <span class="header__menu-btn-line-top"></span>
                        <span class="header__menu-btn-line-centre"></span>
                        <span class="header__menu-btn-line-bottom"></span>
                    </button>
                </div>
                <div data-content-wrp class="header__menu-mob-wrp">
                    <div class="header__menu-mob-cont-wrp">
                        <div class="header__menu-mob-wrp-list-link">
                            <a class="link" href="/">{{__('global.mainPage') }}</a>
                            <a class="link" href="/kalkulyator-podbora-akb-dlya-ibp">{{__('global.pageAkb') }}</a>
                            <a class="link" href="/percentage-calculator">{{__('percentage-calculator.title') }}</a>
                            <a class="link" href="/text-layout-checker">{{__('global.textLayoutChecker') }}</a>
                            <a class="link" href="/raschet-vremeni-avtonomnoy-raboty-IBP">{{__('raschet-vremeni-avtonomnoy-raboty-IBP.title') }}</a>
                            <a class="link" href="/raschet-ploshchadi-pryamougolnika">{{__('raschet-ploshchadi-pryamougolnika.title') }}</a>
                        </div>
                        <div class="header__locale-wrp locale-mob">
                            <div class="header__locale-item-wrp">
                                <a class="header__locale-ru" href="{{ LaravelLocalization::getLocalizedURL('ru') }}">ru</a>
                                <span class="header__locale-line-active"></span>
                            </div>
                            <span class="header__locale-line"></span>
                            <div class="header__locale-item-wrp">
                                <a class="header__locale-ua" href="{{ LaravelLocalization::getLocalizedURL('ua') }}">
                                    <img class="header__locale-ua-icon" src="/icon/locale-icon.svg" alt="ua">
                                    <p>ua</p>
                                </a>
                                <span class="header__locale-line-active active"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
