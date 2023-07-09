<?php
namespace App\Helpers\Cms;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\Tags\Url;
 
class Utils {

    /**
     * Create sitemap.xml
     */
    public static function create_sitemap()
    {
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                $excluded = array(
                    'appuser',
                );
                if (in_array($url->segment(1), $excluded)) return;
                return $url;
            })
            ->configureCrawler(function (Crawler $crawler) {
                $crawler->ignoreRobots();
                $crawler->setMaximumDepth(6);
            })
            ->setMaximumCrawlCount(200)
            ->writeToFile('sitemap.xml');
    }
}