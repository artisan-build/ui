<?php

namespace ArtisanBuild\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class DocumentationController
{
    public $docPath = __DIR__ . '/../resources/views';

    public function __invoke($component, $kit = 'default')
    {
        // This documentation is intended to run on the ArtisanUI documentation site only. You can do what you want
        // though. Just set the env.is-artisan-build configuration variable to true in your site to serve these docs.
        // Just don't open an issue about it not displaying correctly because your layout component is incompatible.
        if (config('app.env') === 'production' && !config('env.is-artisan-build')) {
            abort(404);
        }

        $componentClass = Blade::getClassComponentAliases()['aui-' . $component];

        $cc = new $componentClass();

        $test = View::exists('artisan-ui::' . $component . '.' . $kit . '-test')
            ? view('artisan-ui::' . $component . '.' . $kit . '-test') : '<i class="fa fa-book-dead"></i> Why No Tests?';

        $testFile = File::exists($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') ?
            File::get($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') : 'Test Missing';

        return view('artisan-ui::documentation',
            [
                'title'         => Str::title(str_replace('-', ' ', $component)) . ' (' . $cc->alias . ')',
                'signature'     => $cc->signature,
                'description'   => $cc->description,
                'expected'      => $cc->expected,
                'testing'       => $test,
                'testFile'      => $this->cleanMarkupForDisplay($testFile),
            ]);
    }

    private function cleanMarkupForDisplay($html)
    {
        $html = str_replace("\t", "\n", $html);

        return $html;
    }
}
