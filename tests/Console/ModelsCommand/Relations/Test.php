<?php

declare(strict_types=1);

namespace Lum\Generator\Tests\Console\ModelsCommand\Relations;

use Lum\Generator\Console\ModelsCommand;
use Lum\Generator\Tests\Console\ModelsCommand\AbstractModelsCommand;
use Lum\Generator\Tests\Console\ModelsCommand\Relations\Types\SampleToManyRelationType;
use Lum\Generator\Tests\Console\ModelsCommand\Relations\Types\SampleToOneRelationType;
use Illuminate\Support\Facades\Config;

class Test extends AbstractModelsCommand
{
    protected function setUp(): void
    {
        parent::setUp();

        Config::set('ide-helper.additional_relation_types', [
            'testToOneRelation' => SampleToOneRelationType::class,
            'testToManyRelation' => SampleToManyRelationType::class,
        ]);
    }

    public function test(): void
    {
        $command = $this->app->make(ModelsCommand::class);

        $tester = $this->runCommand($command, [
            '--write' => true,
        ]);

        $this->assertSame(0, $tester->getStatusCode());
        $this->assertStringContainsString('Written new phpDocBlock to', $tester->getDisplay());
        $this->assertMatchesMockedSnapshot();
    }
}
