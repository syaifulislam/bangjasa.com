<?php 
  $locale = App::getLocale();
?>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" style="background-color: #d6ff09">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img src="{{ asset('bangjasa.png') }}">
        </a>
    
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarBasicExample" class="navbar-menu" style="background-color: #d6ff09">
        <div class="navbar-start is-size-4-desktop is-size-5-mobile has-text-weight-bold">
            <a class="navbar-item" href="{{ url('/tentang-kami') }}" style="color: #0f7bce;">Tentang Kami</a>
            <a class="navbar-item" href="{{ url('/hubungi-kami') }}" style="color: #0f7bce;">Hubungi Kami</a>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="field is-grouped">
              <p class="control">
                <a class="bd-tw-button button" target="_blank" style="background: #f09433; 
                background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
                background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 )" href="https://www.instagram.com/{{ env('INSTAGRAM') }}">
                  <span class="has-text-white">
                    Instagram
                  </span>
                </a>
              </p>
              <p class="control">
                <a class="button is-primary" href="https://api.whatsapp.com/send?phone={{ env('WHATSAPP') }}" style="background-color: #25d366">
                  <span class="has-text-white">Whatsapp</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <script>
      $('.navbar-burger').click(function(){
          if ($(this).hasClass('is-active')){
            $(this).removeClass('is-active')
            $('.navbar-menu').removeClass('is-active')
          } else {
            $(this).addClass('is-active')
            $('.navbar-menu').addClass('is-active')
          }
      })

      $('#language').change(function(){
        let lang = $(this).val()
        $.ajax({
            url: "/lang/"+lang,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                if (res.message === 'success'){
                  location.reload();
                }
            }
        });
      })
  </script>