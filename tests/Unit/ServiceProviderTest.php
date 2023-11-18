<?php

use Damilaredev\LaravelEmail\LaravelEmailServiceProvider;

it('provides', function () {
    $provider = app()->resolveProvider(LaravelEmailServiceProvider::class);

    expect($provider->isDeferred())->toBe(false);
});
