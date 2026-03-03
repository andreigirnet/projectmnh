@extends('front.app')
@section('content')
    <div class="hero-header">
        <div class="hero-header__overlay"></div>
        <h1 class="hero-header__title">Insights & Stories</h1>
    </div>

    <div class="blog-wrapper">
        <div class="blog-grid">
            @foreach($blogs as $blog)
                <article class="blog-card">
                    <a href="{{route('front.show.blog', $blog->slug)}}" class="blog-card__link">
                        <div class="blog-card__image-wrapper">
                            <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="{{$blog->title}}" class="blog-card__img">
                            <div class="blog-card__badge">Safety</div>
                        </div>

                        <div class="blog-card__content">
                            <h3 class="blog-card__title">{{$blog->title}}</h3>
                            <p class="blog-card__excerpt">
                                {{ Str::limit($blog->description, 120) }}
                            </p>

                            <div class="blog-card__footer">
                                <span class="blog-card__cta">Read Article</span>
                                <svg class="blog-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </div>

    <div class="blog-pagination">
        {{ $blogs->links('paginator') }}
    </div>
@endsection
