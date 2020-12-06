<?php

namespace Tests;

use Illuminate\Support\Facades\Blade;

class WithoutNamespaceTest extends TestCaseWithoutNamespace
{
    /** @test */
    public function it_honors_config_value()
    {
        $this->assertStringNotContainsString('aui-', current(array_keys(Blade::getClassComponentAliases())));
    }
}
