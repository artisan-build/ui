<?php

namespace ArtisanBuild\UI\View\Components;

class CodeBlock extends BaseComponent
{
    public $kit;

    public $signature  = 'x-aui-code-block';

    public $description = 'A code block styled with highlight.js';

    public $expected = [
        'highlightjs' => '(optional) The language for which you want to use sytnax highlighting (see highlightjs docs)',
        'pre_*'       => '(wildcard) Any attributes prepended with pre_ will be applied to the pre tag',
        'code_*'      => '(wildcard) Any attributes prepended with code_ will be applied to the code tag',
    ];

    public function __construct($kit = 'default')
    {
        $this->kit = $kit;
        parent::__construct();
    }
}
