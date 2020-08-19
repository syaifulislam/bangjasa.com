<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bangjasa.com</title>
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
        <div class="container">
            <div class="notification has-text-centered is-size-1">
                {{ __('under_development.text') }}
            </div>
        </div>
    </body>
</html>
