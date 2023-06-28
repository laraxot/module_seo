<?php

declare(strict_types=1);

namespace Modules\Seo\Console\Command;

use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\SitemapGenerator;

class SitemapGenerate extends Command
{
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
     */
    public function handle()
    {
        /**
         * @var string $app_url
         */
        $app_url = config('app.url');
        $url = strval($app_url);
        SitemapGenerator::create($url)
            ->configureCrawler(function (Crawler $crawler) {
                $crawler->setMaximumDepth(3);
                $crawler->ignoreRobots();
            })
            ->setMaximumCrawlCount(500)
            ->writeToFile(public_path('sitemap.xml'));
    }
}
