<?php
namespace DJStarCOM\RobotsManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class RobotsManagerFacade
 *
 * @package DJStarCOM\RobotsManager
 * @method static string|null generate()
 * @method static void addSitemap(string $sitemap)
 * @method static void addLine(string $line)
 * @method static void addUserAgent(string $userAgent)
 * @method static void addHost(string $host)
 * @method static void addDisallow($directories)
 * @method static void addRuleLine($directories, string $rule)
 * @method static void addAllow($directories)
 * @method static void addComment(string $comment)
 * @method static void addSpacer()
 * @method static void reset()
 */
class RobotsManager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \DJStarCOM\RobotsManager\RobotsManager::class;
    }
}
