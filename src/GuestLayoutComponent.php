<?php

namespace ArtisanBuild\UI;

use Illuminate\View\Component;

class GuestLayoutComponent extends Component
{
    public function render()
    {
        return <<<'blade'
        <div>
            {{ $slot }}
        </div>
    blade;
    }
}
