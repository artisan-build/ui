<?php

namespace ArtisanBuild\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use League\CommonMark\MarkdownConverterInterface;

class DocumentationController
{
    public $docPath = __DIR__ . '/../resources/views';

    public function __invoke(MarkdownConverterInterface $converter, $component, $kit = 'default')
    {
        $componentClass = new (Blade::getClassComponentAliases()[$component]);

        dd($componentClass);

        $test = View::exists('artisan-ui::' . $component . '.' . $kit . '-test')
            ? view('artisan-ui::' . $component . '.' . $kit . '-test') : 'Samples Coming Soon';

        $testFile = File::exists($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') ?
            File::get($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') : 'Test Missing';

        return view('artisan-ui::documentation',
            [
                'testing'       => $test,
                'testFile'      => $testFile,
            ]);
    }
}
