<?php

/**
* @link https://www.digitalocean.com/community/questions/how-to-automatically-generate-sitemap-with-laravel
*
* @link https://freek.dev/557-automatically-generate-a-sitemap-in-laravel
 */

declare(strict_types=1);

namespace Modules\Seo\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\SitemapGenerator;

// use File;
// ---- services --

/**
 * Class SitemapXmlController.
 */
class SitemapXmlController extends Controller {
    /**
     *  __invoke.
     */
    public function __invoke(): \Spatie\Sitemap\Sitemap {
        // ...

        $url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];

        return SitemapGenerator::create($url)
            ->getSitemap();
    }
}