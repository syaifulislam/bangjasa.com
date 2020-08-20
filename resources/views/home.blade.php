<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: #d4d4d5">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>Bangjasa.com</title> --}}
        {!! SEO::generate() !!}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet">
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="google-site-verification" content="wVZSC2Na4zBILtMBlRK0VHlZkUSJMCA_-zZC_oxc4sA" />
    </head>
    <body>
        @include('component.header_development')
        {{-- <div class="has-text-centered">
            <figure class="image is-3by1 is-rounded">
                <img src="{{ asset('header.png') }}">
            </figure>
        </div> --}}
        <div class="container">
            
        </div>
    </body>
</html>
