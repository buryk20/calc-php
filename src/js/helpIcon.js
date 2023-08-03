import GlobalMethods from './classMethods';

export let helpIcon = function() {
    const formWrp = document.querySelector('[data-form]');
    if(formWrp) {
        const arrIcons = document.querySelectorAll('[data-icon-help]');
        const btnCloseArr = document.querySelectorAll('[data-close-help-btn]');
        const wrpTextHelp = document.querySelectorAll('[data-help-text]');
        const wrpContent = document.querySelectorAll('[data-help-content]');

        const globalMethods = new GlobalMethods();

        globalMethods.arrClickAddActive(arrIcons);

        globalMethods.delClickClassActiveArrStopPrapagation(btnCloseArr, arrIcons);

        globalMethods.delClickClassActiveArrStopPrapagation(wrpTextHelp, arrIcons);

        globalMethods.stopPropagationArr(wrpContent);
    }
}