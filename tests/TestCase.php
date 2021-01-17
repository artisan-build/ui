<?php

namespace Tests;

use ArtisanBuild\UI\GuestLayoutComponent;
use ArtisanBuild\UI\UIProvider;
use GrahamCampbell\Markdown\Facades\Markdown;
use GrahamCampbell\Markdown\MarkdownServiceProvider;
use Illuminate\Support\Facades\Blade;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        if (!in_array('guest-layout', Blade::getClassComponentAliases())) {
            Blade::component(GuestLayoutComponent::class, 'guest-layout');
        }
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    protected function getPackageProviders($app)
    {
        return [UIProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('app.key', 'base64:r0w0xC+mYYqjbZhHZ3uk1oH63VadA3RKrMW52OlIDzI=');
        $app['config']->set('artisan-ui.use_namespace', true);
    }
}
