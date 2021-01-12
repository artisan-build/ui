<?php

namespace ArtisanBuild\UI\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class BaseComponent extends Component
{
    private $alias;
    protected $template;
    protected $kit;

    protected $defaultDisplayClass = 'inline-flex';

    public function __construct()
    {
        $this->getAlias();
        $this->getTemplate();
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

    /**
     * @param null $tag
     *
     * @return string
     *                accesskey 	Specifies a shortcut key to activate/focus an element
    contenteditable 	Specifies whether the content of an element is editable or not
    data-* 	Used to store custom data private to the page or application
    dir 	Specifies the text direction for the content in an element
    draggable 	Specifies whether an element is draggable or not
    hidden 	Specifies that an element is not yet, or is no longer, relevant
    id 	Specifies a unique id for an element
    lang 	Specifies the language of the element's content
    spellcheck 	Specifies whether the element is to have its spelling and grammar checked or not
    style 	Specifies an inline CSS style for an element
    tabindex 	Specifies the tabbing order of an element
    title 	Specifies extra information about an element
    translate
     */
    public function defaultAttributes(ComponentAttributeBag $attributeBag)
    {
    }

    public function displayClass(ComponentAttributeBag $attributeBag, $tag = null)
    {
        $want = is_null($tag) ? 'class' : $tag . '_class';

        foreach ($attributeBag->only(['inline', 'inline-flex', 'flex', 'block', 'inline-block']) as $class) {
            return '';
        }

        return $this->defaultDisplayClass;
    }

    public function buildClasses(ComponentAttributeBag $attributeBag)
    {
        dd($attributeBag);
        $classes = [];
        $this->buildColors();
        $this->buildSizes();
    }

    public function buildColors()
    {
    }

    public function buildSizes()
    {
    }

    public function unencode(string $string): string
    {
        return str_replace(['<x-', '</x-'], ['&lt;x-', '&lt;/x-'], $string);
    }
}
