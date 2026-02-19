<?php

namespace App\Observers;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;

class BlogObserver
{
    public function created(Blog $blog)
    {
        $this->generateSitemap();
    }

    public function updated(Blog $blog)
    {
        $this->generateSitemap();
    }

    public function deleted(Blog $blog)
    {
        $this->generateSitemap();
    }

    private function generateSitemap()
    {
        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add(Url::create(route('frontHome')));
        $sitemap->add(Url::create(route('terms')));
        $sitemap->add(Url::create(route('front.products')));
        $sitemap->add(Url::create(route('front.team')));
        $sitemap->add(Url::create(route('front.contact')));
        $sitemap->add(Url::create(route('front.faq')));
        $sitemap->add(Url::create(route('front.consulting')));
        $sitemap->add(Url::create(route('front.verify')));
        $sitemap->add(Url::create(route('front.cookies')));
        $sitemap->add(Url::create(route('front.blog')));

        // Blogs
        Blog::all()->each(function ($blog) use ($sitemap) {
            $sitemap->add(
                Url::create(route('front.show.blog', $blog->slug))
                    ->setLastModificationDate($blog->updated_at)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
