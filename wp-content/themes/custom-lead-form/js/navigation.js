(function($) {
    'use strict';

    $(document).ready(function() {
        $('.mobile-menu-toggle').on('click', function() {
            $('.main-navigation').toggleClass('active');

            var isExpanded = $(this).attr('aria-expanded') === 'true';
            $(this).attr('aria-expanded', !isExpanded);
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.mobile-menu-toggle, .main-navigation').length) {
                $('.main-navigation').removeClass('active');
                $('.mobile-menu-toggle').attr('aria-expanded', 'false');
            }
        });

        $('a[href^="#"]').on('click', function(event) {
            if (this.hash !== '') {
                event.preventDefault();

                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 70
                }, 800, function() {
                    window.location.hash = hash;
                });

                $('.main-navigation').removeClass('active');
                $('.mobile-menu-toggle').attr('aria-expanded', 'false');
            }
        });
    });

})(jQuery);
