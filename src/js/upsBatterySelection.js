import Validation from './validation';
import GlobalMethods from './classMethods';

export let upsBatterySelection = function() {
    const updBatterySelectionVar = document.querySelector('[data-upd-battery-selection]');

    if(updBatterySelectionVar) {
        const btnDisable = document.querySelector('[data-btn-disable]');
        const dataKpdInvertor = document.querySelector('[data-kpd-invertor]');

        const inputLoadW = document.querySelector('[data-load-w]');
        const inputInverter = document.querySelector('[data-kpd-invertor]');
        const inputTameWork = document.querySelector('[data-tame-work]');
        const inputRatedVoltage = document.querySelector('[data-rated-voltage]');
        const inputArr = [inputLoadW, inputInverter, inputTameWork, inputRatedVoltage];

        const btnResult = document.querySelector('[data-result-btn]');
        const resultOutput = document.querySelector('[data-result]');

        const validation = new Validation();
        const globalMethods = new GlobalMethods();

        btnDisable.addEventListener('click', function () {
            this.classList.toggle('active');
            dataKpdInvertor.classList.toggle('disabled');
            if(dataKpdInvertor.classList.contains('disabled')) {
                dataKpdInvertor.setAttribute('disabled', '');
                dataKpdInvertor.value = 80;
            } else {
                dataKpdInvertor.removeAttribute('disabled');
            }
        });

        btnResult.addEventListener('click', () => {
            globalMethods.delClassArr(inputArr, 'error');
            let arrBoolean = validation.checkEmptiness(inputArr);
            if(arrBoolean.some(el => el === false)) {
                arrBoolean.forEach((el, index) => {
                    if(el === false) {
                        inputArr[index].classList.add('error');
                    }
                });
            } else {
                let inputLoadWValue = inputLoadW.value;
                let inputInverterValue = inputInverter.value;
                let inputTameWorkValue = inputTameWork.value;
                let inputRatedVoltageValue = inputRatedVoltage.value;
                let resultAh;

                resultAh = (inputLoadWValue / inputRatedVoltageValue) * inputTameWorkValue;
                console.log(resultAh);
                if(inputInverterValue > 1) {
                    resultAh = resultAh/(inputInverterValue/100);
                } else {
                    resultAh = resultAh/inputInverterValue;
                }
                resultOutput.innerHTML = Math.ceil(resultAh);
            }
        });
    }
}