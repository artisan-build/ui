<?php

namespace Tests;

use NunoMaduro\LaravelMojito\InteractsWithViews;

class CodeBlockTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_renders_code_block_default()
    {
        $this->assertView('artisan-ui::tests/code-block/default')->has('pre');
        $this->assertView('artisan-ui::tests/code-block/default')->has('code');
        $this->assertView('artisan-ui::tests/code-block/default')->contains('x-aui-button');
        $this->assertView('artisan-ui::tests/code-block/default')->contains('/x-aui-button');
        $this->assertView('artisan-ui::tests/code-block/default')->contains('pre id=&quot;my_pre_id');
        $this->assertView('artisan-ui::tests/code-block/default')->contains('code class=&quot;w-full');
    }
}
