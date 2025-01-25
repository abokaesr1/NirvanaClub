<?php

namespace App\View\Components\Home;

use App\Models\Discover as ModelsDiscover;
use App\Models\Readytojoin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Discover extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $discover = ModelsDiscover::first();
        $readytojoin = Readytojoin::first();
        return view('components.home.discover',compact('discover', 'readytojoin'));
    }
}
