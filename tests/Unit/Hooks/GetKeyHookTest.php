<?php

declare(strict_types=1);

namespace DanielDeWit\LaravelIdeHelperHookGetKey\Tests\Unit\Hooks;

use Barryvdh\LaravelIdeHelper\Console\ModelsCommand;
use DanielDeWit\LaravelIdeHelperHookGetKey\Hooks\KeyTypeHook;
use DanielDeWit\LaravelIdeHelperHookGetKey\Tests\stubs\ModelWithIntegerKey;
use Illuminate\Database\Eloquent\Model;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class GetKeyHookTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    /**
     * @test
     */
    public function it_writes_get_key_method_for_string_key_type(): void
    {
        /** @var ModelsCommand|MockInterface $command */
        $command = Mockery::mock(ModelsCommand::class)
            ->shouldReceive('setMethod')
            ->with(
                'getKey()',
                'null|string',
            )
            ->getMock();

        /** @var ModelWithStringKey|MockInterface $model */
        $model = Mockery::mock(ModelWithStringKey::class)
            ->shouldReceive('getKeyType')
            ->andReturn('string')
            ->getMock();

        (new KeyTypeHook())->run($command, $model);
    }

    /**
     * @test
     */
    public function it_writes_get_key_method_for_integer_key_type(): void
    {
        /** @var ModelsCommand|MockInterface $command */
        $command = Mockery::mock(ModelsCommand::class)
            ->shouldReceive('setMethod')
            ->with(
                'getKey()',
                'null|int',
            )
            ->getMock();

        /** @var ModelWithStringKey|MockInterface $model */
        $model = Mockery::mock(ModelWithIntegerKey::class)
            ->shouldReceive('getKeyType')
            ->andReturn('string')
            ->getMock();

        (new KeyTypeHook())->run($command, $model);
    }
}
