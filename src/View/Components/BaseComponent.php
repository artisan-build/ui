<?php

namespace ArtisanBuild\UI\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class BaseComponent extends Component
{
    public string $alias       = '';
    protected string $template = '';
    protected string $kit      = 'default';

    public string $color    = 'primary';
    public string $size     = 'md';
    public string $family   = 'dark';
    public string $rounded  = 'md';
    protected array $colors = [];
    protected array $sizes  = [];
    public string $classes  = '';
    // class and data-* are excluded below because they are inserted elsewhere.
    public array $htmlAttributes = [
        '*' => ['accesskey', 'contenteditable', 'dir', 'draggable', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title', 'translate'],
        'a' => ['download', 'href', 'hreflang', 'media', 'ping', 'referrerpolciy', 'origin', 'rel', 'target', 'type'],
        'button' => ['autofocus', 'disabled', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget', 'name', 'type', 'value'],
    ];



    public function __construct()
    {
        $this->getAlias();
        $this->getTemplate();
        $this->buildColors();
        $this->buildSizes();
    }

    public function getAlias(): void
    {
        $this->alias = array_search(get_called_class(), Blade::getClassComponentAliases());
    }

    public function getTemplate(): void
    {
        $this->template = 'artisan-ui::' . join('.',
                [str_replace('aui-', '', $this->alias), $this->kit]);
    }

    public function render()
    {
        return view($this->template);
    }

    public function tagAttributes(ComponentAttributeBag $attributeBag, $tag): string
    {
        $string = '';
        $tag .= '_';
        foreach ($attributeBag->whereStartsWith($tag) as $key => $value) {
            $string .= ' ' . str_replace($tag, '', $key) . '="' . str_replace('"', '\\"', trim($value)) . '"';
        }

        return $string;
    }

    public function buildColors(): void
    {
        $colorFamilies = ['primary', 'secondary', 'success', 'warning', 'info', 'danger'];

        $color = $this->color;

        if (in_array($this->color, $colorFamilies)) {
            $color = config('artisan-ui.colors.' . $this->color);
        }

        // Default to dark background buttons, alerts, etc.
        $colors = [
            'background'        => $color . '-' . config('artisan-ui.color_depths.dark-background'),
            'background-hover'  => $color . '-' . config('artisan-ui.color_depths.dark-background-hover'),
            'background-active' => $color . '-' . config('artisan-ui.color_depths.dark-background-active'),
            'text'              => $color . '-' . config('artisan-ui.color_depths.text_over_dark'),
            'border'            => $color . '-' . config('artisan-ui.color_depths.dark-border'),
        ];

        if ($this->family === 'light') {
            $colors = [
                'background'        => $color . '-' . config('artisan-ui.color_depths.light-background'),
                'background-hover'  => $color . '-' . config('artisan-ui.color_depths.light-background-hover'),
                'background-active' => $color . '-' . config('artisan-ui.color_depths.light-background-active'),
                'text'              => $color . '-' . config('artisan-ui.color_depths.light_over_dark'),
                'border'            => $color . '-' . config('artisan-ui.color_depths.light-border'),
            ];
        }

        if ($this->color === 'black') {
            $colors = [
                'background'        => 'black',
                'background-hover'  => 'gray' . '-' . config('artisan-ui.color_depths.dark-background-hover'),
                'background-active' => 'gray' . '-' . config('artisan-ui.color_depths.dark-background-active'),
                'text'              => 'white',
                'border'            => 'black',
            ];
        }

        if ($this->color === 'white') {
            $colors = [
                'background'        => 'white',
                'background-hover'  => 'gray' . '-' . config('artisan-ui.color_depths.light-background-hover'),
                'background-active' => 'gray' . '-' . config('artisan-ui.color_depths.light-background-active'),
                'text'              => 'black',
                'border'            => 'gray' . '-' . config('artisan-ui.color_depths.light-border'),
            ];
        }

        $this->colors = $colors;
    }

    public function buildSizes(): void
    {
        $sizes = [
            'xs'  => 'px-2.5 py-1.5 leading-4',
            'sm'  => 'px-3 py-2 leading-4',
            'md'  => 'px-4 py-2 leading-5',
            'lg'  => 'px-4 py-2 leading-6',
            'xl'  => 'px-6 py-3 leading-6',
            '2xl' => 'px-8 py-4 leading-6',
        ];

        $this->sizes = $sizes;
    }

    public function unencode(string $string): string
    {
        return str_replace(['<x-', '</x-'], ['&lt;x-', '&lt;/x-'], $string);
    }
}
