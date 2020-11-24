<?php

namespace ArtisanBuild\UI\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class BaseComponent extends Component
{
    private $alias;
    protected $template;

    public function __construct()
    {
        $this->getAlias();
        $this->getTemplate();
    }

    public function getAlias()
    {
        $this->alias = array_search(get_called_class(), Blade::getClassComponentAliases());
    }

    public function getTemplate()
    {
        $this->template = 'artisan-ui::' . join('.',
                [str_replace('aui-', '', $this->alias), $this->version]);
    }

    public function render()
    {
    }
}
