<?php

declare(strict_types=1);

namespace DanielDeWit\LaravelIdeHelperHookGetKey\Tests\stubs;

use Illuminate\Database\Eloquent\Model;

class ModelWithStringKey extends Model
{
    /**
     * @var string
     */
    protected $keyType = 'string';
}
