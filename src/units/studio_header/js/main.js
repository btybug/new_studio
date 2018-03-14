$(document).ready(function () {
    $('body').on("click", ".select-type", function () {
        var val = $(this).data('id');
        var url = window.location.pathname + "?id=" + val;
        window.location = url;
    });

    var btnlinksign = $('.bty-btn-sign-up');
    var btylogreg = $('.bty-log-reg');
    btnlinksign.on('click', function () {
        btylogreg.show();
    });
    $(document).mouseup(function (e) {
        var containerreg = $(".bty-log-reg");
        if (containerreg.has(e.target).length === 0) {
            containerreg.hide();
        }
    });

    var linkmob = $('.burger-mob');
    var menumobhead =  $('.bottom-mob');
    linkmob.on( "click", function() {
        menumobhead.toggle(300);
        // $('i', this).toggleClass('fa fa-bars fa fa-times');
        if($('.user-menu-mob').is(":visible"))
        {
            $('.user-menu-mob').hide(300);
        }
    });

    var linkusermob = $('.user-link-mob');
    var menuusermob =  $('.user-menu-mob');
    linkusermob.on( "click", function() {
        menuusermob.toggle(300);
        if($('.bottom-mob').is(":visible"))
        {
            $('.bottom-mob').hide(300);
        }
    });

});