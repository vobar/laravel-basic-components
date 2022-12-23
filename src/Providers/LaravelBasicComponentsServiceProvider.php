<?php

namespace Vobar\LaravelBasicSite\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelBasicComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            //php artisan vendor:publish --tag=news
            $this->publishes([
                __DIR__ . '/../../database/migrations/0000_00_00_000000_create_news_table.php' => database_path(
                    '/migrations/0000_00_00_000000_create_news_table.php'
                ),
                __DIR__ . '/../../app/Http/Controllers/NewsController.php' => app_path('Http/Controllers/NewsController.php'),
                __DIR__ . '/../../app/Models/News.php' => app_path('Models/News.php'),
            ], 'news');

            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        }
    }
}