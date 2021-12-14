<?php

declare(strict_types=1);

namespace DanielDeWit\LaravelIdeHelperHookGetKey\Hooks;

use Barryvdh\LaravelIdeHelper\Console\ModelsCommand;
use Barryvdh\LaravelIdeHelper\Contracts\ModelHookInterface;
use Illuminate\Database\Eloquent\Model;

class GetKeyHook implements ModelHookInterface
{
    public function run(ModelsCommand $command, Model $model): void
    {
        $command->setMethod('getKey', 'null|' . $model->getKeyType());
    }
}
