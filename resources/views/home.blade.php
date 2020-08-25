<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <div class="has-text-centered mt-2">
            <figure class="image is-3by1">
                <img src="{{ asset('logo_bangjasa.png') }}">
            </figure>
        </div>
        <div class="container mt-4">
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                              <div class="media-content has-text-centered">
                                <p class="title is-size-4-desktop is-size-5-mobile">BOOTH</p>
                              </div>
                            </div>
                        </div>
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="{{ asset('image/booth/booth1.png') }}" alt="Placeholder image">
                          </figure>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content has-text-centered">
                                  <p class="title is-size-4-desktop is-size-5-mobile">ADVERTISING</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="{{ asset('image/advertising/advertising1.png') }}" alt="Placeholder image">
                          </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content has-text-centered">
                                  <p class="title is-size-4-desktop is-size-5-mobile">BRANDING</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="{{ asset('image/branding/branding1.png') }}" alt="Placeholder image">
                          </figure>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content has-text-centered">
                                  <p class="title is-size-4-desktop is-size-5-mobile">INTERIOR</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="{{ asset('image/interior/interior1.png') }}" alt="Placeholder image">
                          </figure>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content has-text-centered">
                                  <p class="title is-size-4-desktop is-size-5-mobile">ALUMUNIUM</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="{{ asset('image/alumunium/alumunium1.png') }}" alt="Placeholder image">
                          </figure>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content has-text-centered">
                                  <p class="title is-size-4-desktop is-size-5-mobile">3D DESIGN</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="{{ asset('image/3d/3d1.png') }}" alt="Placeholder image">
                          </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
