<?php

use Damilaredev\LaravelEmail\View\Components\Container as ContainerView;
use Illuminate\Config\Repository as Config;
use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory as FactoryContract;
use Illuminate\Support\Facades\Facade;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Mockery as m;

beforeEach(function () {
    $this->config = m::mock(Config::class);

    $container = new Container;
    $this->viewFactory = m::mock(Factory::class);

    $container->instance('view', $this->viewFactory);
    $container->alias('view', FactoryContract::class);
    $container->instance('config', $this->config);

    Container::setInstance($container);
    Facade::setFacadeApplication($container);
});

test('container view get returned using view helper', function () {
    $view = m::mock(View::class);

    $this->viewFactory->shouldReceive('make')
        ->once()
        ->with('laravel-email::components.container', [], [])
        ->andReturn($view);

    $component = new ContainerView();

    expect($view)->toBe($component->resolveView());
});

test('container view name gets returned', function () {
    $this->config->shouldReceive('get')->once()->with('view.compiled')->andReturn('/tmp');
    $this->viewFactory->shouldReceive('exists')->once()->andReturn(false);
    $this->viewFactory->shouldReceive('addNamespace')->once()->with('__components', '/tmp');

    $component = new ContainerView();

    $rendered = $component->resolveView();
    $this->viewFactory->shouldReceive('make')->with($rendered, [], [])->andReturn('<p>Hello World</p>');
})->skip();
