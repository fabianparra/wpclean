(function($) {
    $(document).ready(function() {
        $('#slides').owlCarousel({
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true
        });

        $("#proyect-items").owlCarousel({
            autoPlay: 3000,
            items : 3,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            navigation: true,
            pagination: false
        });
    });
}(jQuery));