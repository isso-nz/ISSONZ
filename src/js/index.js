import '../scss/index.scss';
import _ from 'lodash';

let navMini = document.getElementById('nav-mini');
let navClose = document.getElementById('nav-close');
let menuMini = document.getElementById('menu-mini');
let flashingLamp = document.getElementById('flashing-lamp');
let livestream = document.getElementById('live-stream');
let livestreamText = document.getElementById('live-text');
var lampOn = false;
var lampOpen = false;

var toggleLamp = setInterval(() => {
    if(!lampOpen){
        if(lampOn){
            flashingLamp.classList.add('hidden');
            flashingLamp.classList.remove('block');
            lampOn = false;
        } else{
            flashingLamp.classList.add('block');
            flashingLamp.classList.remove('hidden');
            lampOn = true;
        }
    }
}, 2000);

menuMini.addEventListener('click', openNav);

navClose.addEventListener('click', closeNav)

function openNav() {
    navMini.classList.add('block','fade-in');
    navMini.classList.remove('hidden','fade-out');
}

function closeNav() {
    navMini.classList.add('fade-out');
    setTimeout(() => {
        navMini.classList.add('hidden');
    }, 500);
    navMini.classList.remove('block','fade-in');
}

livestream.addEventListener('mouseout', liveTextHide)
livestream.addEventListener('mouseover', liveTextShow)

function liveTextHide() {
    livestreamText.classList.add('hidden');
    livestreamText.classList.remove('block');
    lampOpen = false;
}

function liveTextShow() {
    livestreamText.classList.add('block')
    livestreamText.classList.remove('hidden');
    flashingLamp.classList.add('hidden');
    flashingLamp.classList.remove('block');
    lampOpen = true;
}