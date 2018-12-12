<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'encounter') - encounter</title>
    <meta name="description" content="@yield('description', 'encounter')" />
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')

  </head>
  <body>
  <div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        <a href="#0" class="cd-top">Top</a>
        @include('layouts._footer')
      </div>
    </div>
  </div>

    <script src="/js/app.js"></script>
  <script>
      jQuery(document).ready(function($){
          // browser window scroll (in pixels) after which the "back to top" link is shown
          var offset = 300,
              //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
              offset_opacity = 1200,
              //duration of the top scrolling animation (in ms)
              scroll_top_duration = 700,
              //grab the "back to top" link
              $back_to_top = $('.cd-top');

          //hide or show the "back to top" link
          $(window).scroll(function(){
              ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
              if( $(this).scrollTop() > offset_opacity ) {
                  $back_to_top.addClass('cd-fade-out');
              }
          });

          //smooth scroll to top
          $back_to_top.on('click', function(event){
              event.preventDefault();
              $('body,html').animate({
                      scrollTop: 0 ,
                  }, scroll_top_duration
              );
          });

      });
  </script>
  @yield('scripts')
  </body>
</html>