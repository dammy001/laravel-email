<?php

namespace Damilaredev\LaravelEmail;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelEmailServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->bootResources()
            ->bootPublishing()
            ->bootComponents();
    }

    /**
     * Boot the package resources.
     */
    protected function bootResources(): static
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-email');

        return $this;
    }

    /**
     * Boot the package's publishable resources.
     */
    protected function bootPublishing(): static
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/laravel-email'),
            ], 'laravel-email-views');
        }

        return $this;
    }

    /**
     * Boot the package components.
     */
    protected function bootComponents(): static
    {
        Blade::componentNamespace(
            'Damilaredev\\LaravelEmail\\View\\Components',
            'laravel-email'
        );

        return $this;
    }
}
