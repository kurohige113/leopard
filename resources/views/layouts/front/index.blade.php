<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>@yield('head-title')</title>
    <meta name="description" itemprop="description" content="@yield('head-description')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('head-meta')
    @yield('head-css')
    @yield('head-js')
   </head>
  <body>
  
  {{-- header --}}
  <header id="header">
    <div class="header__bg"></div>
    <h1>@yield('header-service-name')</h1>
    <h2>@yield('header-public-relations')</h2>
    <a href="#begin" class="button">はじめる</a>
  </header>

  {{-- content --}}
  @yield('content')

  {{-- footer --}}
  <footer id="footer">
    <p>&copy; 2021 FREE TOY BOX</p> 
  </footer>

  {{-- body last --}}
  @yield('body-last')
  </body>
</html>