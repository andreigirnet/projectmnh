<?php

namespace App\Console\Commands;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

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

        Blog::all()->each(function ($blog) use ($sitemap) {
            $sitemap->add(
                Url::create(route('front.show.blog', $blog->slug))
                    ->setLastModificationDate($blog->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
