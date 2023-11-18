<?php

use Damilaredev\LaravelEmail\View\Components\Body;
use Illuminate\Support\Facades\Facade;
use Illuminate\View\ComponentAttributeBag;
use Illuminate\Config\Repository as Config;
use Illuminate\View\Factory;
use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory as FactoryContract;
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

test('inline view gets created', function () {
    $this->config->shouldReceive('get')->once()->with('view.compiled')->andReturn('/tmp');
    $this->viewFactory->shouldReceive('exists')->once()->andReturn(false);
    $this->viewFactory->shouldReceive('addNamespace')->once()->with('__components', '/tmp');

    $component = new Body();
    $rendered = $component->withAttributes(['style' => 'background-color: #0000;'])->resolveView();

    expect($rendered)->toBe('__components::01ae4c51d16aeb41c6f6417643afa5ba');
});

test('data exposure', function () {
    $component = new Body();

    $attributes = (new ComponentAttributeBag())
        ->merge(['width' => '100%'])
        ->style(['background-color' => '#0000']);

    $component->withAttributes($attributes->getAttributes())->data();

    expect((string) $component->attributes)->toBe('style="background-color;" width="100%"');
});
