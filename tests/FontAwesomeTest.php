<?php

namespace Tests;

use Illuminate\Support\Facades\Blade;
use NunoMaduro\LaravelMojito\InteractsWithViews;

class FontAwesomeTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_works_with_all_icon_families()
    {
        $this->assertView('artisan-ui::font-awesome/default-test')->has('i');
        $this->assertView('artisan-ui::font-awesome/default-test')->contains('<i class="fas fa-building "></i>');
        $this->assertView('artisan-ui::font-awesome/default-test')->contains('<i class="far fa-building "></i>');
        $this->assertView('artisan-ui::font-awesome/default-test')->contains('<i class="fad fa-building "></i>');
        $this->assertView('artisan-ui::font-awesome/default-test')->contains('<i class="fab fa-twitter "></i>');
    }
}
