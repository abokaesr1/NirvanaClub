<?php

namespace App\View\Components\Defualt;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $src;

    public function __construct($src)
    {
        $this->src = $src;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.defualt.hero-section');
    }
}
