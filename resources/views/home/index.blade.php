<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>FREE TOY BOX</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="便利そうで便利じゃない少し便利なツールを提供します。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
      $(function() {
        const hum = $('#hamburger, .close')
        const nav = $('.sp-nav')
        hum.on('click', function() {
          nav.toggleClass('toggle');
        });
      });
    </script>
  </head>
  <body>
  
  <header id="header">
    <h1 class="slide-left show">
      <a href="{{ route('home.index') }}">FREE TOY BOX</a>
    </h1>
    <nav class="pc-nav slide-right show">
      <ul>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#service">SERVICE</a></li>
      </ul>
    </nav>
    <nav class="sp-nav">
      <ul>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#service">SERVICE</a></li>
        <li class="close"><span>閉じる</span></li>
      </ul>
    </nav>
    <div id="hamburger" class="slide-right show">
      <span></span>
    </div>
  </header>

  <article>
    <div class="main-visual">
      <div class="slide-bottom show">
        <h2>the Beautiful World</h2>
        <a href="#about" class="button">ABOUT</a>
      </div>
    </div>
  </article>

  <section id="about">
    <h2 class="slide-bottom show">ABOUT<span></span></h2>
    <p class="slide-bottom show">便利そうで便利じゃない<br>少し便利なツールを提供します。</p>
  </section>
    
  <section id="service">
    <h2 class="slide-bottom show">SERVICE<span></span></h2>
    <div>
      <div class="icon_list">
        <ul class="flex">
          <li class="slide-left show"><img src="{{ asset('images/icon_hearing.png') }}" alt="テキスト"><p>テキスト</p></li>
          <li class="slide-left show"><img src="{{ asset('images/icon_marketing.png') }}" alt="テキスト"><p>テキスト</p></li>
          <li class="slide-left  show"><img src="{{ asset('images/icon_planning.png') }}" alt="テキスト"><p>テキスト</p></li>
          <li class="slide-left  show"><img src="{{ asset('images/icon_support.png') }}" alt="テキスト"><p>テキスト</p></li>
        </ul>
      </div>
      <p class="slide-right show"></p>
      <div class="slide-bottom show"><a href="{{ route('services.index') }}" class="button">もっと見る</a></div>
    </div>
  </section>

  <footer id="footer">
    <p>&copy; 2021 FREE TOY BOX</p> 
  <script>
    //フェードイン用のコードです
    $(function(){
      $(window).on('load scroll', function() {
        $(".show").each(function() {
          var winScroll = $(window).scrollTop();
          var winHeight = $(window).height();
          var scrollPos = winScroll + (winHeight * 0.9);
          if($(this).offset().top < scrollPos) {
            $(this).css({opacity: 1, transform: 'translate(0, 0)'});
          }
        });
      });
    });
    //フェードイン用のコードはここまでです
    
    //ヘッダーの高さと背景色の変更
    $(function () {
      const header = $('#header');
      $(window).on('load scroll' ,function () {
        var headerHeight = header.innerHeight();
  
        $(window).on('scroll' ,function () {
          if ( $(this).scrollTop() > 100 ) {
            header.addClass('min-header');
          } else {
            header.removeClass('min-header');
          }
        });
      });
    });
  </script>
  
  </body>
</html>
