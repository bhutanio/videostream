window.$ = window.jQuery = require('jquery');

require('bootstrap-sass');
import swal from "sweetalert2";
window.swal = swal;

require('./uploader');

+(function ($) {
    'use strict';

    $(window).on('load resize', function () {
        $('#content-area').css('min-height', $(window).height() - ($('header').height() + $('footer').height() + 80) + 'px');
    });

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip({'container': 'body'});

    // Popover
    $('[data-toggle="popover"]').popover();
})(jQuery);