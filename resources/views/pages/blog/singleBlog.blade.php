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
    <div class="blogContainer">
        <div class="blogInnerSingle">
            <div class="singleBlogTitleContainer">
                <h1 class="singleBogTitle">{{$blog->title}}</h1>
            </div>
            <div class="imgSingleBlogContainer">
                <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" class="singleBlogImage" >
            </div>
            <div class="singleBlogTitleContainer" style="margin-top: 10px">
                <p class="singleBogTitle" style="font-size: 20px; font-weight: 600"><span>Created at: </span>{{$blog->created_at}}</p>
            </div>
            <div class="blogSingleContentContainer">
                <div class="blogSingleContent">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>

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

