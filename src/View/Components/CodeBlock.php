<?php

namespace ArtisanBuild\UI\View\Components;

class CodeBlock extends BaseComponent
{
    public $kit;

    public $signature  = 'x-aui-code-block';

    public $description = 'A code block styled with highlight.js';

    public function __construct($kit = 'default')
    {
        $this->kit = $kit;
        parent::__construct();
    }
}
