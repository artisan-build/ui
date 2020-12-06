<?php

namespace ArtisanBuild\UI\View\Components;

class CodeOneLiner extends BaseComponent
{
    public $kit;

    public $signature  = 'x-aui-code-one-liner';

    public function __construct($kit = 'default')
    {
        $this->kit = $kit;
        parent::__construct();
    }

    public function unencode(string $string): string
    {
        return str_replace(['<x-', '</x-'], ['&lt;x-', '&lt;/x-'], $string);
    }

    public function render()
    {
        return view($this->template);
    }
}
