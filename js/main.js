//Declarando variáveis

var toggleMenu = document.querySelectorAll('.ib-toggle-menu');
var menuMobile = document.querySelector('.ib-menu-mob');
var btnMenuMobIcon = document.querySelector('.ib-btn-menu-mob ion-icon');

//Abrindo e Fechando o Menu Mobile

for(var m = 0; m < toggleMenu.length; m++) {
    toggleMenu[m].addEventListener('click', function() {
        var overlay = document.querySelector('.ib-menu-overlay');
        overlay.classList.toggle('ib-is-open');
        menuMobile.classList.toggle('ib-menu-is-closed');
        menuMobile.classList.toggle('ib-menu-is-open');

        var icon = btnMenuMobIcon.getAttribute('name');

        if(icon === 'menu-outline') {
            btnMenuMobIcon.setAttribute('name', 'close');
        } else{
            btnMenuMobIcon.setAttribute('name', 'menu-outline');
        }
    });
}