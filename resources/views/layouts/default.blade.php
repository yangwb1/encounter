<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>@yield('title', 'encounter') - encounter</title>
    <meta name="description" content="@yield('description', 'encounter')" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}">
    @yield('styles')

  </head>
  <body>
  <div id="app" class="{{ route_class() }}-page">


    <div class="container">
      @include('layouts._header')

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 col-sm-6 navbar-left">
        @include('shared._messages')
          </div>
          <div class="col-md-6 col-sm-6">
        @include('layouts._sidebar')
          </div>
        </div>

          <div class="row-offcanvas row-offcanvas-left">

        @yield('content')

        <a href="#0" class="cd-top">Top</a>
        @include('layouts._footer')
          </div>
      </div>
    </div>
  </div>


  <script type="text/javascript"  src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/offcanvas.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/modernizr.custom.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/classie.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('js/uisearch.js') }}"></script>
  <script>
      new UISearch( document.getElementById( 'sb-search' ) );
  </script>
  {{--回到顶部--}}
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
  @yield('scriptsAfterJs')
  </body>
</html>