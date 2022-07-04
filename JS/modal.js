const open = document.querySelectorAll('#open');
const modal_container= document.getElementById('modal_container');
const close = document.querySelectorAll('#close');

function addEventListenerList(list, event, fn) {
    for (var i = 0, len = list.length; i < len; i++) {
        list[i].addEventListener(event, fn, false);
    }
}

function abrir(){
    modal_container.classList.add("show")
}

function cerrar(){
    modal_container.classList.remove("show")
}
var ar_coins = document.getElementsByClassName('coins');
addEventListenerList(open, 'click', abrir);
addEventListenerList(close, 'click', cerrar);