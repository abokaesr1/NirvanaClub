<?php

namespace App\View\Components\Home;

use App\Models\Map as ModelsMap;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Map extends Component
{
    public $locations; // Declare a public variable to hold locations

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->locations = ModelsMap::all(); // Fetch all locations

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.map', [
            'locations' => $this->locations,
        ]);
    }
}
