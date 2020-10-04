<?php

declare(strict_types=1);

namespace Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Models;

use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithDocblockReturn;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithDocblockReturnFqn;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithNullablePrimitiveReturn;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithoutReturnType;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithParam;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithPrimitiveDocblockReturn;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithPrimitiveReturn;
use Lum\Generator\Tests\Console\ModelsCommand\LaravelCustomCasts\Casts\CustomCasterWithReturnType;
use Illuminate\Database\Eloquent\Model;

class CustomCast extends Model
{
    protected $casts = [
        'casted_property_with_return_type' => CustomCasterWithReturnType::class,
        'casted_property_with_return_docblock' => CustomCasterWithDocblockReturn::class,
        'casted_property_with_return_docblock_fqn' => CustomCasterWithDocblockReturnFqn::class,
        'casted_property_with_return_primitive' => CustomCasterWithPrimitiveReturn::class,
        'casted_property_with_return_primitive_docblock' => CustomCasterWithPrimitiveDocblockReturn::class,
        'casted_property_with_return_nullable_primitive' => CustomCasterWithNullablePrimitiveReturn::class,
        'casted_property_without_return' => CustomCasterWithoutReturnType::class,
        'casted_property_with_param' => CustomCasterWithParam::class . ':param',
    ];
}
