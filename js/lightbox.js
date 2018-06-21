jQuery(document).ready(function () {
    var jQuerygallery = jQuery('#gallery');
    var jQueryboxes = jQuery('.revGallery-anchor');
   jQueryboxes.hide();

    jQuerygallery.imagesLoaded({background: true}, function () {
        jQueryboxes.fadeIn();

        jQuerygallery.isotope({
            // options
            sortBy: 'original-order',
            layoutMode: 'fitRows',
            itemSelector: '.revGallery-anchor',
            stagger: 30,
        });
    });

    jQuery('button').on('click', function () {
        var filterValue = jQuery(this).attr('data-filter');
        jQuery('#gallery').isotope({filter: filterValue});
        jQuerygallery.data('lightGallery').destroy(true);
        jQuerygallery.lightGallery({
            selector: filterValue.replace('*', '')
        });
    });
});

jQuery(document).ready(function () {
    jQuery("#gallery").lightGallery({

    });
});

//button active mode
jQuery('.button').click(function () {
    jQuery('.button').removeClass('is-checked');
    jQuery(this).addClass('is-checked');
});


//CSS Gram Filters on Mouse enter
jQuery("#gallery a .nak-gallery-poster").addClass("inkwell");

jQuery("#gallery a").on({
    mouseenter: function () {
        jQuery(this).find(".nak-gallery-poster").removeClass("inkwell").addClass("walden");
    },
    mouseleave: function () {
        jQuery(this).find(".nak-gallery-poster").removeClass("walden").addClass("inkwell");
    }
}); 