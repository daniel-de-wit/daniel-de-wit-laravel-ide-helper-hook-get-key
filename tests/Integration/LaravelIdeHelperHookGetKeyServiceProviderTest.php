<?php

declare(strict_types=1);

namespace DanielDeWit\LaravelIdeHelperHookGetKey\Tests\Integration;

use DanielDeWit\LaravelIdeHelperHookGetKey\Hooks\GetKeyHook;
use DanielDeWit\LaravelIdeHelperHookGetKey\Providers\LaravelIdeHelperHookGetKeyServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelIdeHelperHookGetKeyServiceProviderTest extends TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelIdeHelperHookGetKeyServiceProvider::class,
        ];
    }

    /**
     * @test
     */
    public function it_adds_the_get_key_hook_to_the_config(): void
    {
        static::assertContains(GetKeyHook::class, config('ide-helper.model_hooks'));
    }
}
