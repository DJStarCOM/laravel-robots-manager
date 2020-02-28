<?php
namespace DJStarCOM\RobotsManager;

use Illuminate\Support\ServiceProvider;

/**
 * Class RobotsManagerServiceProvider
 *
 * @package DJStarCOM\RobotsManager
 */
class RobotsManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Get the services provided for deferred loading.
     *
     * @return array
     */
    public function provides(): array
    {
        return [RobotsManager::class];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register Manager class singleton with the app container
        $this->app->singleton(RobotsManager::class);
    }
}
