<?php

namespace ArtisanBuild\UI\View\Components;

class Fa extends BaseComponent
{
    public string $family = 'r';
    public string $class  = '';

    public function render()
    {
        return <<<'blade'
        <i class="fa{{ $family }} fa-{{ $slot }} {{ $attributes['class'] }}"></i>
    blade;
    }
}
