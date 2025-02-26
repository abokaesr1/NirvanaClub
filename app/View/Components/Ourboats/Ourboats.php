<?php

namespace App\View\Components\Ourboats;

use App\Models\Discover;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Ourboats extends Component
{
    /**
     * Create a new component instance.
     */
    public  $discover;
    public function __construct()
    {
        $this->discover = Discover::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.ourboats.ourboats');
    }
}
