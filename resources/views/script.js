    /**
     * Funcion para crear varios eventos sobre un mismo elemento
     *
     * @param object element - elemento a asignar los eventos
     * @param string events - array con los eventos
     * @param string listener - nombre de la función o texto de la misma
     */
     function addListenerMulti(element, events, listener) {
        events.forEach(el => {
            element.addEventListener(el, listener, false);
        });
    }

    addListenerMulti(document.querySelector("#input6"), ["change", "click", "keyup"], setWith1)
    addListenerMulti(document.querySelector("#input7"), ["change", "click", "keyup"], setWith2)

    function setWith1(e) {
        let valor = parseFloat(this.value);
        if (this.value < 0 || this.value == "") { valor = 0; }
        if (this.value > 100) { valor = 100; }
        document.querySelector("#porcentaje_aprove").style.width = valor + "%";
    }

    function setWith2(e) {
        let valor = parseFloat(this.value);
        if (this.value < 0 || this.value == "") { valor = 0; }
        if (this.value > 100) { valor = 100; }
        document.querySelector("#porcentaje_aproba").style.width = valor + "%";
    }

    var elInput1 = document.querySelector('#input1');
    var elInput2 = document.querySelector('#input2');
    var elInput3 = document.querySelector('#input3');
    var elInput4 = document.querySelector('#input4');
    var elInput5 = document.querySelector('#input5');

    if (elInput1) {
        var labelNum1 = document.querySelector('#labelNum1');

        if (labelNum1) {
            labelNum1.innerHTML = elInput1.value;

            elInput1.addEventListener('input', function() {
                labelNum1.innerHTML = elInput1.value;
            }, false);
        }
    }
    if (elInput2) {
        var labelNum2 = document.querySelector('#labelNum2');

        if (labelNum2) {
            labelNum2.innerHTML = elInput2.value;

            elInput2.addEventListener('input', function() {
                labelNum2.innerHTML = elInput2.value;
            }, false);
        }
    }
    if (elInput3) {
        var labelNum3 = document.querySelector('#labelNum3');
        if (labelNum3) {
            labelNum3.innerHTML = elInput3.value;

            elInput3.addEventListener('input', function() {
                labelNum3.innerHTML = elInput3.value;
            }, false);
        }
    }
    if (elInput4) {

        var labelNum4 = document.querySelector('#labelNum4');

        if (labelNum4) {
            labelNum4.innerHTML = elInput4.value;

            elInput4.addEventListener('input', function() {
                labelNum4.innerHTML = elInput4.value;
            }, false);
        }
    }
    if (elInput5) {
        var labelNum5 = document.querySelector('#labelNum5');
        if (labelNum5) {
            labelNum5.innerHTML = elInput5.value;

            elInput5.addEventListener('input', function() {
                labelNum5.innerHTML = elInput5.value;
            }, false);
        }
    }