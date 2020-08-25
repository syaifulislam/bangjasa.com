<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    </head>
    <body>
        @include('component.header_development')
        <section class="hero">
            <div class="hero-body has-text-centered has-text-weight-bold is-size-3-desktop is-size-4-mobile">
                <span>Tentang Kami</span>
            </div>
        </section>
        <div class="container">
            <div class="columns">
                <div class="column">
                    <figure class="image is-256x256">
                        <img src="{{ asset('slogan.png') }}">
                    </figure>
                </div>
                <div class="column">
                    <div class="has-text-justified is-size-4-desktop is-size-6-mobile">
                        <span style="color: #0f7bce" class="has-text-weight-bold">PT. Hylarana Kreasi Inspira</span> merupakan perusahaan yang bergerak pada bidang produksi Billboard, Neon Box, Neon Sign, Letter Sign, Design Graphics, Exhibition, Booth Construction, Promotion Production, Shop Sign, Product Branding  Interior Equipment dan Office Interior. <br><br>
                        Sebelum menggunakan nama <span style="color: #0f7bce" class="has-text-weight-bold">Hylarana</span> kami menggunakan nama KAPRICOMM yang berdiri sejak tahun 2009, sehingga pengalaman kami dalam bidang <span style="color: #d6ff09" class="has-text-weight-bold">Booth, Interior, Outdoor Advertising, dan Branding Product</span> terbilang cukup memadai dalam memenuhi segala kebutuhan Anda atau Perusahaan Anda. Kami juga melayani jasa web design dan programming untuk memenuhi kebutuhan pemasaran produk anda <br><br>
                    </div>
                </div>
            </div>
            <div class="has-text-justified is-size-4-desktop is-size-6-mobile">
                <span style="color: #0f7bce" class="has-text-weight-bold">PT. Hylarana Kreasi Inspira</span> Hadir kehadapan Anda untuk memenuhi tuntutan periklanan yang tanggap terhadap perubahan. Hal ini memungkinkan karena dari tiap individu kami telah berkesempatan menimba banyak pengalaman selama kurun waktu yang cukup. Dengan menjadikan nilai-nilai “fitriyah” dan moralitas sebagai pijakan asasi, kami memasuki era baru yang penuh pilihan tak terbatas.Kualitas, Pelayanan, Harga yang Kompetitif serta Ketepatan Waktu adalah komitmen utama kami. <br><br>
                Kami memulai usaha dengan kerja keras, ketekunan dan selalu melakukan inovasi perubahan tumbuh dan berkembang.Pada saat ini dengan berbagai macam pengalaman terutama bidang periklanan, pemasaran dengan dukungan Tenaga Ahli Professional yang tergabung dalam Team Kerja Handal. Kami akan membantu untuk mewujudkan apa yang menjadi impian Perusahaan anda.
            </div>
        </div>
    </body>
    {{-- @include('component.footer') --}}
</html>
