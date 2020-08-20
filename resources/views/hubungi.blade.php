<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: #d4d4d5">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! SEO::generate() !!}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet">
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
      src="https://maps.googleapis.com/maps/api/js?key={{env('GMAPS_API')}}&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    </head>
    <body>
        @include('component.header_development')
        <section class="hero mt-6">
            <div class="hero-body has-text-centered has-text-weight-bold is-size-3-desktop is-size-4-mobile">
                <span style="color: #0f7bce">Hubungi Kami</span>
            </div>
        </section>
        <div class="container">
            <div class="columns">
                <div class="column">
                    <figure class="image is-256x256">
                        <img src="{{ asset('hylarana.png') }}">
                    </figure>
                    <div class="has-text-left is-size-4-desktop is-size-6-mobile">
                        <br><br><span>Office & Workshop : </span><br><br>
                        <span>Jalan K.H. Syahdan no.21 Palmerah Jakarta Barat 11480</span><br><br>
                        <span>(dekat kampus Bina Nusantara Syahdan Kemanggisan, depan matrial Karya Pribumi)</span>
                    </div>
                </div>
                <div class="column">
                    <div id="map" style="height: 500px; width:100%"></div>
                </div>
            </div>
        </div>
    </body>
    {{-- @include('component.footer') --}}
</html>
<script>

function initMap() {
    var myLatLng = {lat: -6.2018349, lng: 106.7882245};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: myLatLng
    });

    var contentString = `<strong>PT. Hylarana Kreasi Inspira</strong><br><br>
                            Jalan K.H. Syahdan no.21 Palmerah, Jakarta Barat 11480`

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'PT. Hylarana Kreasi Inspira'
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
}
</script>