<?php

namespace ArtisanBuild\UI\View\Components;

class CodeOneLiner extends BaseComponent
{
    public $signature  = 'x-aui-code-one-liner';

    public function __construct($kit = 'default')
    {
        $this->kit = $kit;
        parent::__construct();
    }
}
