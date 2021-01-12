<?php

namespace ArtisanBuild\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use League\CommonMark\MarkdownConverterInterface;

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
            ? view('artisan-ui::' . $component . '.' . $kit . '-test') : 'Samples Coming Soon';

        $testFile = File::exists($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') ?
            File::get($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') : 'Test Missing';

        return view('artisan-ui::documentation',
            [
                'title'         => Str::title(str_replace('-', ' ', $component)),
                'description'   => $cc->description,
                'expected'      => $cc->expected,
                'testing'       => $test,
                'testFile'      => $testFile,
            ]);
    }
}
