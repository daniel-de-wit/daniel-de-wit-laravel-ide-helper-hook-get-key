<?php

namespace DanielDeWit\LaravelIdeHelperHookGetKey\Providers;

use DanielDeWit\LaravelIdeHelperHookGetKey\Hooks\GetKeyHook;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\ServiceProvider;

class LaravelIdeHelperHookGetKeyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->isProduction()) {
            return;
        }

        /** @var Config $config */
        $config = $this->app->get('config');

        $config->set('ide-helper.model_hooks', array_merge([
            GetKeyHook::class,
        ], $config->get('ide-helper.model_hooks', [])));
    }
}
