<?php

namespace ArtisanBuild\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class UIProvider extends ServiceProvider
{
    public function boot(): void
    {
        foreach (File::files(__DIR__ . '/View/Components') as $file) {
            if (Str::endsWith($file->getFilename(), '.php')) {
                Blade::component('ArtisanBuild\UI\View\Components\\' . $file->getFilenameWithoutExtension(),
                    Str::lower(Str::kebab($file->getFilenameWithoutExtension())), 'aui');
                if (!config('artisan-ui.use_namespace')) {
                    Blade::component('ArtisanBuild\UI\View\Components\\' . $file->getFilenameWithoutExtension(),
                        Str::lower(Str::kebab($file->getFilenameWithoutExtension())), null);
                }
            }
        }

        Route::get('/artisan-ui/components/{component}/{kit?}', DocumentationController::class)
            ->name('artisan-ui-component-doc');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'artisan-ui');

        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'artisan-ui');
    }
}
