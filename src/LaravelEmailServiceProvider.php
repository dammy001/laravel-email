<?php

namespace Damilaredev\LaravelEmail;

use Damilaredev\LaravelEmail\View\Components\Body;
use Damilaredev\LaravelEmail\View\Components\Column;
use Damilaredev\LaravelEmail\View\Components\Container;
use Damilaredev\LaravelEmail\View\Components\Font;
use Damilaredev\LaravelEmail\View\Components\Head;
use Damilaredev\LaravelEmail\View\Components\Heading;
use Damilaredev\LaravelEmail\View\Components\Hr;
use Damilaredev\LaravelEmail\View\Components\Html;
use Damilaredev\LaravelEmail\View\Components\Img;
use Damilaredev\LaravelEmail\View\Components\Link;
use Damilaredev\LaravelEmail\View\Components\Row;
use Damilaredev\LaravelEmail\View\Components\Section;
use Damilaredev\LaravelEmail\View\Components\Text;
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
                __DIR__.'/../src/View/Components/' => app_path('View/Components'),
                __DIR__.'/../resources/views/components/' => resource_path('views/vendor/components/laravel-email'),
            ], 'laravel-email-views');
        }

        return $this;
    }

    /**
     * Boot the package components.
     */
    protected function bootComponents(): static
    {
        $this->loadViewComponentsAs('laravel-email', [
            Head::class,
            Body::class,
            Html::class,
            Hr::class,
            Row::class,
            Column::class,
            Section::class,
            Text::class,
            Img::class,
            Font::class,
            Link::class,
            Heading::class,
            Container::class,
        ]);

        return $this;
    }
}
