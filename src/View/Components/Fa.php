<?php

namespace ArtisanBuild\UI\View\Components;

class Fa extends BaseComponent
{
    public $family = 'r';
    public $kit    = 'default';
    public $class  = '';

    public function render()
    {
        return <<<'blade'
        <i class="fa{{ $family }} fa-{{ $slot }} {{ $attributes['class'] }}"></i>
    blade;
    }
}
