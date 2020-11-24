<?php

namespace ArtisanBuild\UI\View\Components;

class CodeBlock extends BaseComponent
{
    public $version;

    public $signature  = 'x-aui-code-block';
    public $attributes = [];

    public function __construct($version = 'default')
    {
        $this->version = $version;
        parent::__construct();
    }

    public function render()
    {
        return view($this->template);
    }
}
