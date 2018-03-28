// Show Mobile Menu Script
(function ($) {

    'use strict';

    const $body = $('body');
    const $hamburger = $('.hamburger');

    $hamburger.click(function () {
        $body.toggleClass('show');
    });

})(jQuery);


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
