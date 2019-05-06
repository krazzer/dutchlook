var lastRandomizedImage = null;
var $homeItems = null;

$(function () {
    $("#homeCarousel").carousel({
        interval: 3500,
        cycle: true
    });

    $('.carousel-inner .item.active').trigger('click');

    $('.mobile-button').click(function () {
        $('nav ul').slideToggle();
    });

    $('.projectCategory').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        },
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

    $(".carousel").addClass('loaded');

    $('#contact-map').each(function () {
        initializeGoogleMaps();
    });

    $(".projectCategory img").addClass('loaded');
    $('.projectCategory.home').addClass('transition');

    $homeItems = $('.projectCategory.home .item');

    setInterval(function () {
        var imagesWithRandom = getVisibleImagesWithRandomNotCurrent();

        if( ! imagesWithRandom.length){
            return;
        }

        var i = Math.floor(Math.random() * imagesWithRandom.length);

        $homeItems.removeAttr('data-last');

        var $nextItems = imagesWithRandom[i].nextUntil('.item');

        var $currentItem = $nextItems.first();

        $nextItems.each(function () {
            if($(this).attr('data-current') == 1){
                if($(this).next('.hidden').length){
                    $currentItem = $(this).next();
                } else {
                    $currentItem = imagesWithRandom[i];
                }

                return true;
            }
        });

        $nextItems.removeAttr('data-current');

        if($currentItem.hasClass('hidden')){
            $currentItem.attr('data-current', 1);
        }

        imagesWithRandom[i].find('img').attr('src', $currentItem.attr('data-image'));
        imagesWithRandom[i].attr('data-last', 1);

        setTimeout(ini, 100);
    }, 5000)
});

/**
 * Get all images that have random images that are next on the list, but exclude the current randomized, and non visible
 */
function getVisibleImagesWithRandomNotCurrent() {
    var imagesWithRandom = [];

    $homeItems.each(function () {
        var $image = $(this);

        if (!$image.next('.hidden').length) {
            return;
        }

        if ($image.attr('data-last') == 1) {
            return;
        }

        if (!$image.visible(true)) {
            return;
        }

        imagesWithRandom.push($image);
    });

    return imagesWithRandom;
}

function initializeGoogleMaps() {
    if (typeof google === 'undefined') {
        return;
    }

    var position  = new google.maps.LatLng(52.3994979, 4.8410306);
    var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(52.3994979, 4.8410306),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        mapTypeControl: false,
        apiKey: 'AIzaSyCVe3oMZf-LR9_Zop0inAAqttBbLBWHYRw',
        styles: [
            {"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]},
            {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]},
            {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]},
            {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]},
            {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]},
            {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
            {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]},
            {"featureType": "water", "elementType": "all", "stylers": [{"color": "#c0e4f3"}, {"visibility": "on"}]}]
    };

    var map = new google.maps.Map(
        document.getElementById("contact-map"),
        myOptions);

    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title: "Locatie Dutchlook"
    });

    var routeUrl = 'https://maps.google.com?saddr=Current+Location&daddr=Gyroscoopweg+66+1042+AC+Amsterdam+Netherlands';

    var contentString = '<b>DUTCHLOOK</b><br><br>Gyroscoopweg 66<br>1042 AC Amsterdam, <br>netherlands<br><br><a href="' + routeUrl +
        '" target="_blank" class="btn btn-default">Plan route &nbsp; ▸</a>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
}