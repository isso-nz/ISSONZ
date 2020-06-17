import '../scss/index.scss';
import _ from 'lodash';
import Glide from '@glidejs/glide'
import AOS from 'aos';

AOS.init();

var glide = new Glide('.glide',{
   type: 'slider',
   perView: 1,
   autoplay: 7000,
   animationTimingFunc: "ease",
   rewind: true
}).mount()

var firstBlock = document.querySelector('#slide-text');

setInterval(() => {
    firstBlock.children[0].children[1].children[0].classList.remove('hidden')
}, 1000);
setInterval(() => {
    firstBlock.children[0].children[1].children[1].classList.remove('hidden')
}, 2500);


glide.on('run.before', function(){
    const textBlocks = document.querySelectorAll('#slide-text')
    textBlocks.forEach(textBlock => {
        if(textBlock.classList.contains('glide__slide--active')){
            textBlock.children[0].children[1].children[0].classList.add('hidden')
            textBlock.children[0].children[1].children[1].classList.add('hidden')
        } else {
            textBlock.children[0].children[1].children[0].classList.add('hidden')
            textBlock.children[0].children[1].children[1].classList.add('hidden')
        }
    });
});

glide.on('run.after', function(){
    const textBlocks = document.querySelectorAll('#slide-text')
    textBlocks.forEach(textBlock => {
        if(textBlock.classList.contains('glide__slide--active')){
            setInterval(() => {
                textBlock.children[0].children[1].children[0].classList.remove('hidden')
            }, 1000);
            setInterval(() => {
                textBlock.children[0].children[1].children[1].classList.remove('hidden')
            }, 2500);
        } else {
            textBlock.children[0].children[1].children[0].classList.add('hidden')
            textBlock.children[0].children[1].children[1].classList.add('hidden')
        }
    });
});


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
    menuMini.classList.add('fade-out-bottom');
    setTimeout(() => {
        menuMini.classList.add('hidden');
    }, 500);
}

function closeNav() {
    navMini.classList.add('fade-out');
    setTimeout(() => {
        navMini.classList.add('hidden');
        menuMini.classList.remove('hidden','fade-out-bottom');
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