<?php

declare(strict_types=1);

namespace Modules\Seo\Console\Command;

use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\SitemapGenerator;

class SitemapGenerate extends Command {
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'seo:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        // dd(config('app.url'))
        $url = strval(config('app.url'));
        SitemapGenerator::create($url)
            ->configureCrawler(function (Crawler $crawler) {
                $crawler->setMaximumDepth(3);
                $crawler->ignoreRobots();
            })
            ->setMaximumCrawlCount(500)
            ->writeToFile(public_path('sitemap.xml'));
    }
}
