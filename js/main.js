jQuery(document).on('submit', '#formlg', function (event) {
    event.preventDefault();
    jQuery.ajax({
        url: 'main_app/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function () {
            $('.botonlg').val('Validando..');
        }
    })
        .done(function (respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {
                if (respuesta.tipo == 'martin_ramirez') {
                    location.href = 'main_app/martin_ramirez/';
                } if (respuesta.tipo == 'marlen_palomino') {

                } else if (respuesta.tipo == 'office_track') {
                    location.href = 'main_app/office_track/';
                }
            } else {
                $('.error').slideDown('slow');
                setTimeout(function () {
                    $('.error').slideUp('slow');
                }, 3000);
                $('.botonlg').val('Iniciar Sesion');
            }
        })
        .fail(function (resp) {
            console.log(resp.responseText);
        })
        .always(function () {
            console.log("complete");
        });
});
$(document).ready(function () {
    $('.button-collapse').sideNav({
        menuWidth: 170,
        edge: 'left',
        closeOnClick: true,
        draggable: true
    });
    $('span.text-change').typed({
        strings: ["Sonrisas"],
        typeSpeed: 60,
        backDelay: 600,
        callback: function () { $(this) }
    });
    $(function () {
        $('a[href*="#"]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
                if ($target.length) {
                    var targetOffset = $target.offset().top;
                    $('html,body').animate({ scrollTop: targetOffset }, 1000);
                    return false;
                }
            }
        });
    });
    $('.scrollspy').scrollSpy();
    $('.smoo').smoove({ opacity: '0', moveY: '90px', });
});
