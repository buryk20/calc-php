export let upsBatterySelection = function() {
    const updBatterySelectionVar = document.querySelector('[data-upd-battery-selection]');

    if(updBatterySelectionVar) {
        const btnDisable = document.querySelector('[data-btn-disable]');
        const dataKpdInvertor = document.querySelector('[data-kpd-invertor]');


        btnDisable.addEventListener('click', function () {
            this.classList.toggle('active');
            dataKpdInvertor.classList.toggle('disabled');
            if(dataKpdInvertor.classList.contains('disabled')) {
                dataKpdInvertor.setAttribute('disabled', '');
            } else {
                dataKpdInvertor.removeAttribute('disabled');
            }
        })
    }
}