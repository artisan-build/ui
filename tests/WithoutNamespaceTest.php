<?php

namespace Tests;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

class WithoutNamespaceTest extends TestCaseWithoutNamespace
{
    /** @test */
    public function itHonorsConfigValue()
    {
        $raw = 0;

        foreach (array_keys(Blade::getClassComponentAliases()) as $k) {
            if (!Str::startsWith($k, 'aui-')) {
                $raw++;
            }
        }

        $this->assertGreaterThan(0, $raw);
    }
}
