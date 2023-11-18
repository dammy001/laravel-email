<?php

use Damilaredev\LaravelEmail\LaravelEmailServiceProvider;

test('service provider resolves', function () {
    $provider = app()->resolveProvider(LaravelEmailServiceProvider::class);

    expect($provider->isDeferred())->toBe(false);
});
