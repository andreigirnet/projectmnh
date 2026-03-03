<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    {!! SEO::generate() !!}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    {{-- Css --}}
    <link rel = "icon" href ="{{asset('images/logo/flavicons.ico')}}" type = "image/x-icon">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/registerInclude.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/brandSwiper.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/products.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/product.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/teamTraining.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/faq.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/contact.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/login.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/blog.css")}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<meta name="google-site-verification" content="LzejX2Dd-6oj32ZQRq5981tz74cTlalGjMXEwe6ZeiI" />


</head>
<body x-data="app()">

@include("frontIncludes/hamburger")
@include("frontIncludes/responsiveNav")
@include("frontIncludes/frontNav")
@include("frontIncludes/subNav")
@include("frontIncludes/subNavMobile")

    <div class="secondaryBannerContact">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle">Blog</div>
    </div>
<article class="post-article">
    {{-- Header Section --}}
    <header class="post-header">
        <div class="post-header__container">
            <nav class="post-breadcrumb">
                <a href="{{ route('front.blog') }}">Blog</a> <span>/</span> <span>{{ $blog->category ?? 'Safety' }}</span>
            </nav>
            <h1 class="post-article__title">{{ $blog->title }}</h1>

            <div class="post-meta">
                <div class="post-meta__info">
                    <span class="post-meta__label">Published on</span>
                    <time class="post-meta__date">{{ $blog->created_at->format('M d, Y') }}</time>
                </div>
                <div class="post-meta__share">
                </div>
            </div>
        </div>
    </header>

    {{-- Featured Image --}}
    <div class="post-feature-image">
        <div class="post-feature-image__wrapper">
            <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="{{ $blog->title }}" class="post-feature-image__img">
        </div>
    </div>

    {{-- Content Body --}}
    <div class="post-body">
        <div class="post-body__container">
            <div class="post-content-entry">
                {!! $blog->content !!}
            </div>

            <footer class="post-article__footer">
                <div class="post-tags">
                    <span class="tag-exclusive">#Safety</span>
                    <span class="tag-exclusive">#Workplace</span>
                </div>
                <hr class="post-divider">
                <a href="{{ route('front.blog') }}" class="back-to-blog">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    Back to all stories
                </a>
            </footer>
        </div>
    </div>
    <section class="topic-section">
        <div class="topic-section__container">
            <h3 class="topic-section__title">Related Training Topics</h3>
            <div class="topic-section__grid">
                <a href="/" class="topic-pill">Manual Handling Course</a>
                <a href="{{route('front.manual.training')}}" class="topic-pill">Manual Handling Training</a>
                <a href="{{route('front.manual.online')}}" class="topic-pill">Manual Handling Online</a>
                <a href="{{route('front.manual.dublin')}}" class="topic-pill">Manual Handling Dublin</a>
                <a href="{{route('front.manual.certificate')}}" class="topic-pill">Manual Handling Certificate</a>
                <a href="{{route('front.manual.refresher')}}" class="topic-pill">Manual Handling Refresher</a>
                <a href="{{route('front.manual.qqi')}}" class="topic-pill">Manual Handling QQI</a>
                <a href="{{route('front.safe.lifting')}}" class="topic-pill">Safe Lifting Techniques</a>
                <a href="{{route('front.what.handling')}}" class="topic-pill">What is Manual Handling?</a>
                <a href="{{route('front.faq')}}" class="topic-pill">FAQ</a>
                <a href="{{route('front.contact')}}" class="topic-pill">Contact Us</a>
            </div>
        </div>
    </section>
</article>

<script>
window.replainSettings = { id: '9f43da79-85c0-4dd0-9467-72fe6bdf1bff' };
(function(u){var s=document.createElement('script');s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")
<script src="{{asset("js/hamburgerAction.js")}}"></script>
<script src="{{asset("js/brandSwiper.js")}}"></script>
<script src="{{asset("js/accordion.js")}}"></script>
<script src="{{asset("js/review.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset("js/swiper.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{asset('js/mainScript.js')}}"></script>
<script>
    AOS.init();
</script>
</body>
</html>

