<?php

namespace ArtisanBuild\UI;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use League\CommonMark\MarkdownConverterInterface;

class DocumentationController
{
    public $docPath = __DIR__ . '/../resources/views';

    public function __invoke(MarkdownConverterInterface $converter, $component, $kit = 'default')
    {
        $doc  = $this->docPath . '/' . $component . '/' . $kit . '-documentation.md';
        $test = View::exists('artisan-ui::' . $component . '.' . $kit . '-test')
            ? view('artisan-ui::' . $component . '.' . $kit . '-test') : 'Samples Coming Soon';

        $testFile = File::exists($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') ?
            File::get($this->docPath . '/' . $component . '/' . $kit . '-test.blade.php') : 'Test Missing';

        $this->converter = $converter;

        if (!File::exists($doc)) {
            abort(400);
        }

        return view('artisan-ui::documentation',
            [
                'documentation' => $this->converter->convertToHtml(File::get($doc)),
                'testing'       => $test,
                'testFile'      => $testFile,
            ]);
    }
}
