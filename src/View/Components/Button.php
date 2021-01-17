<?php

namespace ArtisanBuild\UI\View\Components;

class Button extends BaseComponent
{
    public string $title       = 'Button';
    public string $signature   = '<x-aui-button ?href ?size ?color ?family ?rounded>Button Text</x-aui-button>';
    public string $description = 'A button that uses either the button or a tag depending on whether an href attribute is used';

    public array $expected = [
        'color'   => '(default: primary) Any tailwind color or one of the following: `primary`, `secondary`, `success`, `warning`, `info`, or `danger`',
        'size'    => '(default: md) Any of the following: `xs`, `sm`, `md`, `lg`, `xl`',
        'family'  => '(default: dark) `dark` (light text on dark background) or light (dark text on light background). Does not apply to black or white buttons.',
        'rounded' => '(default: md) Any of `none`, `sm`, `md`, `lg`, `xl`, `2xl`, `3xl`, `full` (see https://tailwindcss.com/docs/border-radius)',
    ];

    public string $classes = 'items-center __sizes__ border border-transparent text-xs font-medium __rounded__ focus:outline-none transition ease-in-out duration-150 shadow-md __colors__';

    public ?string $href   = null;
    public string $rounded = 'md';

    public function __construct($href = null, $color = 'primary', $size = 'md', $family = 'dark', $rounded = 'md')
    {
        $this->href    = $href;
        $this->color   = $color;
        $this->size    = $size;
        $this->family  = $family;
        $this->rounded = $rounded;
        parent::__construct();
        $this->applyCorners();
        $this->applyColors();
        $this->applySizes();
    }

    public function applyColors()
    {
        $this->classes = str_replace('__colors__',
            "text-{$this->colors['text']} bg-{$this->colors['background']} hover:bg-{$this->colors['background-hover']} focus:border-{$this->colors['border']} focus:shadow-outline-{$this->color} active:bg-{$this->colors['background-active']}",
            $this->classes);
    }

    public function applySizes()
    {
        $this->classes = str_replace('__sizes__', $this->sizes[$this->size], $this->classes);
    }


    public function applyCorners(): void
    {
        $this->classes = str_replace('__rounded__', 'rounded-' . $this->rounded, $this->classes);
    }
}
