<?php

namespace ArtisanBuild\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class UIProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'artisan-ui');
    }

    public function register(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'artisan-ui');
        foreach (File::files(__DIR__ . '/View/Components') as $file) {
            if (Str::endsWith($file->getFilename(), '.php')) {
                Blade::component('ArtisanBuild\UI\View\Components\\' . $file->getFilenameWithoutExtension(),
                    Str::lower(Str::kebab($file->getFilenameWithoutExtension())), config('artisan-ui.use_namespace') ? 'aui' : null);
            }
        }
    }
}
