$(document).ready(function () {

    var show = true;
    var countbox = ".benefits__inner";
    $(window).on("scroll load resize", function () {
        if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
        var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
        var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
        var w_height = $(window).height(); // Высота окна браузера
        var d_height = $(document).height(); // Высота всего документа
        var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
        if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            $('.benefits__number').css('opacity', '1');
            $('.benefits__number').spincrement({
                thousandSeparator: "",
                duration: 5000
            });

            show = false;
        }
    });

});

$('.button-zakaz, .button-zakaz_reklama').click(function() {
    $('div.forma-top').show();
    $('.modal').removeClass('blur');
    $('.forma-top::before').addClass('blure');
});

$('.forma-top-cencel').click(function() {
    $('div.forma-top').hide();
    $('.forma-top::before').removeClass('blure');
});

$('.phone_btton_click').click(function() {
    $('.phone_choise_phone').removeClass('phone_choise_phone-hide');
    $('.phone_btton_click').addClass('phone_choise_phone-hide');
    $('.phone_choise-action').removeClass('phone_choise');
    $('.phone_choise-action').addClass('phone_choise-click');
    $('.button-cancel').removeClass('phone_choise_phone-hide');
});

$('.button-cancel').click(function() {
    $('.phone_choise_phone').addClass('phone_choise_phone-hide');
    $('.phone_btton_click').removeClass('phone_choise_phone-hide');
    $('.phone_btton_click').removeClass('phone_choise-click');
    $('.phone_btton_click').addClass('phone_choise');
    $('.button-cancel').addClass('phone_choise_phone-hide');
});
