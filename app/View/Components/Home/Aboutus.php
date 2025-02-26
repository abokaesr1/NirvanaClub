<?php

namespace App\View\Components\Home;

use App\Models\Aboutus as ModelsAboutus;
use App\Models\Ourcommitment;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Aboutus extends Component
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
        $aboutus = ModelsAboutus::first();
        $ourcommitment = Ourcommitment::first();

        return view('components.home.aboutus', compact('aboutus', 'ourcommitment'));
    }
}
