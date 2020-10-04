<?php

declare(strict_types=1);

namespace Lum\Generator\Tests\Console\ModelsCommand\Relations\Traits;

use Lum\Generator\Tests\Console\ModelsCommand\Relations\Types\SampleToManyRelationType;
use Lum\Generator\Tests\Console\ModelsCommand\Relations\Types\SampleToOneRelationType;

trait HasTestRelations
{
    public function testToOneRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToOneRelationType($instance->newQuery(), $this);
    }

    public function testToManyRelation($related)
    {
        $instance = $this->newRelatedInstance($related);
        return new SampleToManyRelationType($instance->newQuery(), $this);
    }
}
