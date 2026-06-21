<?php

namespace Mateshwari\MateshwariTheme\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class MateshwariThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->registerConfig();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin-routes.php');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/shop-routes.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'mateshwaritheme');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'mateshwaritheme');

        Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('mateshwaritheme::admin.layouts.style');
        });

        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('themes/mateshwari/views'),
        ], 'mateshwari-theme-views');
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php', 'acl'
        );
    }
}
