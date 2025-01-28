<?php

namespace App\View\Components\Home;

use App\Models\Whytojoin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Jointheclub extends Component
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
        $whyjoin = Whytojoin::first();
        return view('components.home.jointheclub', compact('whyjoin'));
    }
}
