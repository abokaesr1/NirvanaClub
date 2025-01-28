<?php

namespace App\View\Components\Home;

use App\Models\Membership as ModelsMembership;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Membership extends Component
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
        $membership = ModelsMembership::get();
        return view('components.home.membership', compact('membership'));
    }
}
