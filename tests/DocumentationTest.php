<?php

namespace Tests;

class DocumentationTest extends TestCase
{
    /** @test */
    public function it_renders_a_document()
    {
        $this->withoutExceptionHandling();
        $this->get(route('artisan-ui-component-doc', ['component' => 'code-block']))
            ->assertSuccessful()
            ->assertSee('<h1>Code Block', false);
    }
}
