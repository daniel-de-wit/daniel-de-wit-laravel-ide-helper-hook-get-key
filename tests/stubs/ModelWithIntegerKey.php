<?php

declare(strict_types=1);

namespace DanielDeWit\LaravelIdeHelperHookGetKey\Tests\stubs;

use Illuminate\Database\Eloquent\Model;

class ModelWithIntegerKey extends Model
{
    /**
     * @var string
     */
    protected $keyType = 'int';
}
