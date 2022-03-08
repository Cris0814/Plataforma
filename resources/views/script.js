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

   addListenerMulti(document.querySelector("input[type=number]"), ["change", "click", "keyup"], setWith)

   function setWith(e) {
       let valor = parseInt(this.value);
       if (this.value < 0 || this.value == "") {
           valor = 0;
       }
       if (this.value > 100) {
           valor = 100;
       }
       document.querySelector(".miBarra div").style.width = valor + "%";
       document.querySelector(".miBarra span").innerHTML = valor + "%";
   }