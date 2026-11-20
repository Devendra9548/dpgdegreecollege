@extends('templates.front.main')
@section('metainfo')
<title>DPG Degree College, Haldwani | Uttarakhand</title>
<meta name="description" content="DPG Degree College">
<meta name="keywords" content="DPG Degree College">
<meta name="author" content="DPG Degree College">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="DPG Degree College, Haldwani | Uttarakhand" />
<meta property="og:description" content="DPG Degree College" />
<meta property="og:url" content="https://www.dpgdegreecollege.com" />
<meta property="og:site_name" content="DPG Degree College" />
<meta property="og:image" content="https://www.dpgdegreecollege.com/assets/front/imgs/banners/1.jpg" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://www.dpgdegreecollege.com" />
<link rel="preload" href="/assets/logo.webp" as="image" type="image/webp">
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/home.css">
<link rel="stylesheet" href="/assets/front/css/preloader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
@endsection
@section('body')
<div id="dp" aria-hidden="true">
    <div class="dp-lid dp-lt"></div>
    <div class="dp-lid dp-lb"></div>
    <div class="dp-stage">
        <div class="dp-logo-wrap">
            <div class="dp-ring"></div>
            <div class="dp-glow"></div>
            <img class="dp-logo" src="/assets/logo.webp" alt="DPG Degree College" fetchpriority="high" loading="eager"/>
        </div>
        <div class="dp-bar"><i></i></div>
    </div>
</div>
<?php 
$banners=[
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/1.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/3.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/4.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/5.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/6.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/7.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/8.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/9.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/10.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/32.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/12.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/13.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/14.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/15.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/16.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/17.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/18.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/19.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/20.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/21.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/22.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/33.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/24.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/25.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/34.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/27.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/28.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/29.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/30.jpg"
    ],
    [
        "name" => "banners",
        "img" => "/assets/front/imgs/banners/31.jpg"
    ],
];
?>

<section class="first-hero-section">
    @foreach($banners as $banners)
    <picture>
        <source media="(max-width: 767px)" srcset="{{$banners['img']}}">
        <source media="(min-width: 768px)" srcset="{{$banners['img']}}">
        <img src="{{$banners['img']}}" alt="Banner" width="100%">
    </picture>
    @endforeach
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$('.first-hero-section').slick({
    slidesToShow: 1,
    arrows: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            arrows: false,
            dots: true,
        }
    }]
});
</script>

<script>
(function () {
  var MIN_MS = 2600;   
  var MAX_MS = 8000;   
  var el = document.getElementById('dp');
  if (!el) return;

  var root = document.documentElement;
  var done = false;
  var t0 = Date.now();

  root.classList.add('dp-lock');

  function removeEl() {
    if (el && el.parentNode) el.parentNode.removeChild(el);
  }

  function finish() {
    if (done) return;
    done = true;
    el.classList.add('dp-out');
    root.classList.remove('dp-lock');
    setTimeout(removeEl, 1000);
  }

  function ready() {
    var wait = Math.max(0, MIN_MS - (Date.now() - t0));
    setTimeout(finish, wait);
  }

  if (document.readyState === 'complete') ready();
  else window.addEventListener('load', ready);

  setTimeout(finish, MAX_MS);

  // Back/forward button (bfcache) se aane par preloader atak na jaye
  window.addEventListener('pageshow', function (e) {
    if (e.persisted) {
      done = true;
      root.classList.remove('dp-lock');
      removeEl();
    }
  });
})();
</script>
@endsection