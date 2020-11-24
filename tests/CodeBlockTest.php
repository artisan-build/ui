<?php

namespace Tests;

use NunoMaduro\LaravelMojito\InteractsWithViews;

class CodeBlockTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_renders_code_block_default()
    {
        $this->assertView('artisan-ui::tests/code-block')->has('pre');
        $this->assertView('artisan-ui::tests/code-block')->has('code');
        $this->assertView('artisan-ui::tests/code-block')->contains('&amp;lt;x-aui-button');
        $this->assertView('artisan-ui::tests/code-block')->contains('/x-aui-button&gt;');
    }
}
