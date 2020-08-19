<?php 
  $locale = App::getLocale();
?>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="{{ asset('logo_bangjasa.png') }}" width="112" height="28">
      </a>
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
          <a class="navbar-item" href="https://www.instagram.com/Hylarana_booth_interior" target="_blank">{{ __('under_development.instagram_text') }}</a>
          <a class="navbar-item" href="https://api.whatsapp.com/send?phone=6282122844424" target="_blank">{{ __('under_development.whatsapp_text') }}</a>
          <a class="navbar-item" href="{{ url('/about') }}">{{ __('under_development.about') }}</a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="select">
            <select id="language">
              <option value="en" @if ($locale === 'en') selected @endif>English</option>
              <option value="id" @if ($locale === 'id') selected @endif>Bahasa Indonesia</option>
            </select>
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