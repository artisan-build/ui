<?php

namespace Tests;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

class WithNamespaceTest extends TestCase
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

        // The expected number is 1 because we load a guest-layout component if one does not exist to wrap the docs.
        $this->assertEquals(1, $raw);
    }
}
