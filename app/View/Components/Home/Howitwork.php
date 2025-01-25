<?php

namespace App\View\Components\Home;

use App\Models\Howitwork as ModelsHowitwork;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Howitwork extends Component
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
        $howitwork = ModelsHowitwork::first();

        return view('components.home.howitwork',compact('howitwork'));
    }
}
