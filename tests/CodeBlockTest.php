<?php

namespace Tests;

use NunoMaduro\LaravelMojito\InteractsWithViews;

class CodeBlockTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_renders_code_block_default()
    {
        $this->assertView('artisan-ui::code-block/default-test')->has('pre');
        $this->assertView('artisan-ui::code-block/default-test')->has('code');
        $this->assertView('artisan-ui::code-block/default-test')->contains('x-aui-button');
        $this->assertView('artisan-ui::code-block/default-test')->contains('/x-aui-button');
        $this->assertView('artisan-ui::code-block/default-test')->contains('pre id=&quot;my_pre_id');
        $this->assertView('artisan-ui::code-block/default-test')->contains('code class=&quot;w-full');
    }
}
