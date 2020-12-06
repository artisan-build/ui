<?php

namespace ArtisanBuild\UI\View\Components;

use Illuminate\View\ComponentAttributeBag;

class Button extends BaseComponent
{
    public $kit;
    public $color;
    public $size;

    private $display;
    private $align;
    private $font_weight;
    private $colors;
    private $sizes;

    public $signature  = 'x-aui-code-block';

    public $classes = [
        'default' => '__display__ items-__align__ font-__font_weight__ rounded shadow-sm __colors__ __sizes__',
    ];

    public function __construct($kit = 'default', $color = 'primary', $size = 'md')
    {
        $this->kit   = $kit;
        $this->color = $color;
        parent::__construct();
    }

    public function buildClasses(ComponentAttributeBag $attributeBag)
    {
    }

    public function buildColors()
    {
    }

    public function buildSizes()
    {
    }

    public function render()
    {
        return view($this->template);
    }
}
