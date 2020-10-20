// Import libs
import $ from 'jquery';
//import 'jquery.easing';
//import 'popper.js';
//import 'bootstrap';
//import 'slick-carousel';

// Import styles
import './scss/main.scss';

// On jQuery init
$(function () {

});

// On window load
$(window).on('load', function () {
    /* --- HEADER --- */
    const header = $('.header');
    const burger = $('.header__inner__burger');
    const menu = $('.header__inner__navigation');
    const menuLink = $('li.menu-item');

    // Open menu on click
    burger.click(() => {
        if (!burger.hasClass('open')) {
            burger.toggleClass('open');
            menu.css({
                'top': header.outerHeight(),
                'opacity': 1,
                'visibility': 'visible',
                'transform': "translateY(0)"
            })
        } else {
            burger.toggleClass('open');
            menu.css({
                'top': 0,
                'opacity': 0,
                'visibility': 'hidden',
                'transform': "translateY(20%)"
            });
            $('li.menu-item').find('.sub-menu').removeClass('open')
        }
    });

    // Open sub-menu on click
    menuLink.on('click', 'a', function () {
        if (!$(this).parent().find('.sub-menu').hasClass('open')) {
            $('li.menu-item').find('.sub-menu').removeClass('open');
            $(this).parent().find('.sub-menu').toggleClass('open');
        } else {
            $('li.menu-item').find('.sub-menu').removeClass('open');
        }
    });

});

